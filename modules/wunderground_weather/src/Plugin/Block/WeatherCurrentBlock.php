<?php

/**
* @file
* Contains \Drupal\wunderground_weather\Plugin\Block\WeatherCurrentBlock
*/

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Form\FormStateInterface;
use Drupal\wunderground_weather\Controller\RequestDataController;
use Drupal\wunderground_weather\Plugin\Block\WeatherBlockBase;

/**
* Provides a block with current weather conditions.
*
* @Block(
*  id = "wunderground_weather_current_block",
*  admin_label = @Translation("Current weather conditions block"),
*  module = "wunderground_weather"
* )
*/
class WeatherCurrentBlock extends WeatherBlockBase {
  /**
   * Implements \Drupal\block\BlockBase:: blockForm().
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    $form = parent::blockForm($form, $form_state);
    $form['location'] = [
        '#type' => 'fieldset',
        '#title' => t('Location'),
      ];

    // Autocomplete to get location.
    $form['location']['location_current'] = [
      '#title' => t('Location path'),
      '#type' => 'textfield',
      '#description' => t('Search for your city to determine the Wunderground location path.'),
      '#maxlength' => 120,
      '#required' => TRUE,
      '#autocomplete_route_name' => 'wunderground_weather.autocomplete',
      '#default_value' => isset($config['location_current']) ? $config['location_current'] : '',
    ];

    $settings_current_defaults = [
      'weather' => 'weather',
      'conditions' => 'conditions',
      'temperature' => 'temperature',
      'feels_like' => 'feels_like',
      'wind' => 'wind',
    ];

    $form['current_fields'] = [
      '#title' => t('Fields'),
      '#type' => 'checkboxes',
      '#options' => [
        'weather' => t('Weather description'),
        'temperature' => t('Temperature'),
        'feels_like' => t('Feels like'),
        'wind' => t('Wind speed'),
      ],
      '#default_value' => !empty($this->configuration['current_fields']) ? $this->configuration['current_fields'] : $settings_current_defaults,
    ];

    $icons = [];
    foreach(range('a', 'k') as $set) {
      $icons[$set] = $this->getIconSetSample($set);
    }

    $form['icon_set'] = [
      '#titel' => t('Select an icons set'),
      '#type' => 'radios',
      '#options' => $icons,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('location_current', $form_state->getValue(['location', 'location_current']));
    $this->setConfigurationValue('current_fields', $form_state->getValue(['current_fields']));
    $this->setConfigurationValue('icon_set', $form_state->getValue(['icon_set']));
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Get block configuration.
    $config = $this->getConfiguration();
    $location = $config['location_current'];
    $icon_set = $config['icon_set'];

    // Get all settings.
    $settings = \Drupal::config('wunderground_weather.settings');

    preg_match('#\[(.*?)\]#', $location, $match);
    $path = $match[1];

    $options = [
      'api' => 'api',
      'key' => $settings->get('api_key'),
      'data_feature' => 'conditions',
      'language' => 'lang:' . strtoupper($settings->get('language')),
      'path' => $path,
    ];

    $request = new RequestDataController();
    $weather = $request->get($options);

    // Check if data is received.
    if ($weather) {
      // Calculate windspeed.
      $wind_kph = $weather->current_observation->wind_kph;
      $windspeed = _wunderground_weather_speed_to_beaufort($wind_kph, 'kph');

      // Get fields to be displayed.
      $fields = $this->configuration['current_fields'];

      // Build list items.
      $items = [];
      foreach ($fields as $field => $display) {
        if ($display) {
          switch ($field) {
            case 'weather':
              $items[$field] = $weather->current_observation->weather;
              break;

            case 'temperature':
              $items[$field] = t('Temperature: !temp °C', ['!temp' => $weather->current_observation->temp_c]);
              break;

            case 'feels_like':
              $items[$field] = t('Feels like: !temp °C', ['!temp' => $weather->current_observation->feelslike_c]);
              break;

            case 'wind':
              $items[$field] = t('Wind') . ': ' . $windspeed . ' bft';
              break;
          }
        }
      }

      // Get an unorderd list.
      $item_list = [
        '#theme' => 'item_list',
        '#list_type' => 'ul',
        '#items' => $items,
        '#title' => '',
        '#attributes' => [
          'class' => ['current-weather-summary'],
        ],
      ];
      $summary = render($item_list);

      // Get the weather icon.
      $variables = [
        '#theme' => 'wunderground_weather_current',
        '#iconset' => $icon_set,
        '#image' => [
          '#theme' => 'image',
          '#uri' => $this->getIconUrl($config['icon_set'], $weather->current_observation->icon),
          '#alt' => t('Weather in !city', ['!city' => $weather->current_observation->display_location->full]),
          'title' => t('Weather in !city', ['!city' => $weather->current_observation->display_location->full]),
        ],
        '#summary' => $summary,
      ];

      $output = render($variables);
    }
    else {
      // Return message if no data is retrieved.
      $output = t('No weather forecast available.');
    }

    return ['#children' => $output];
  }
}
