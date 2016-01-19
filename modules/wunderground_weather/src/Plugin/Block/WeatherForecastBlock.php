<?php

/**
* @file
* Contains \Drupal\wunderground_weather\Plugin\Block\WeatherForecastBlock
*/

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\wunderground_weather\Controller\RequestDataController;

/**
* Provides a with a five day weather forecast.
*
* @Block(
*  id = "wunderground_weather_forecast_block",
*  admin_label = @Translation("Weather forecast block")
* )
*/
class WeatherForecastBlock extends WeatherBlockBase {
  /**
   * Implements \Drupal\block\BlockBase:: blockForm().
   */
  public function blockForm ($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    $form['location'] = [
      '#type' => 'fieldset',
      '#title' => t('Location'),
    ];

    // Autocomplete to get location.
    $form['location']['location_forecast'] = [
      '#title' => t('Location path'),
      '#type' => 'textfield',
      '#description' => t('Search for your city to determine the Wunderground location path.'),
      '#maxlength' => 120,
      '#required' => TRUE,
      '#autocomplete_route_name' => 'wunderground_weather.autocomplete',
      '#default_value' => isset($config['location_forecast']) ? $config['location_forecast'] : '',
    ];

    $settings_forecast_defaults = [
      'image' => 'image',
      'conditions' => 'conditions',
      'temperature' => 'temperature',
      'rain' => 'rain',
      'wind' => 'wind',
    ];

    $form['forecast_fields'] = [
      '#title' => t('Fields'),
      '#type' => 'checkboxes',
      '#options' => [
        'image' => t('Weather icons'),
        'conditions' => t('Weather description'),
        'temperature' => t('Temperature'),
        'rain' => t('Chance of rain'),
        'wind' => t('Wind speed'),
      ],
      '#default_value' => isset($config['forecast_fields']) ? $config['forecast_fields'] : $settings_forecast_defaults,
    ];

    $form['number_of_days'] = [
      '#title' => t('For how many days you would like to display a forecast'),
      '#description' => t('You can display up to 10 days'),
      '#type' => 'textfield',
      '#default_value' => isset($config['number_of_days']) ? $config['number_of_days'] : 3,
      '#size' => 2,
      '#maxlength' => 2,
      '#required' => TRUE,
    ];

    $icons = [];
    foreach (range('a', 'k') as $set) {
      $icons[$set] = $this->getIconSetSample($set);
    }

    $form['icon_set'] = [
      '#titel' => t('Select an icons set'),
      '#type' => 'radios',
      '#options' => $icons,
      '#default_value' => isset($config['icon_set']) ? $config['icon_set'] : 'k',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockValidate($form, FormStateInterface $form_state) {
    if ($form_state->getValue(['number_of_days']) > 10) {
      $form_state->setErrorByName('number_of_days', $this->t('You cannot display more than 10 days'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('location_forecast', $form_state->getValue(['location', 'location_forecast']));
    $this->setConfigurationValue('forecast_fields', $form_state->getValue(['forecast_fields']));
    $this->setConfigurationValue('number_of_days', $form_state->getValue(['number_of_days']));
    $this->setConfigurationValue('icon_set', $form_state->getValue(['icon_set']));
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Get block configuration.
    $config = $this->getConfiguration();
    $location = $config['location_forecast'];
    $number_of_days = $config['number_of_days'];
    $icon_set = $config['icon_set'];

    // Get all settings.
    $settings = \Drupal::config('wunderground_weather.settings');

    preg_match('#\[(.*?)\]#', $location, $match);
    $path = $match[1];
    $options = [
      'api' => 'api',
      'key' => $settings->get('api_key'),
      'data_feature' => 'forecast10day',
      'language' => 'lang:' . strtoupper($settings->get('language')),
      'path' => $path,
    ];

    $request = new RequestDataController();
    $data = $request->get($options);
    $days = $data->forecast->simpleforecast->forecastday;

    $variables['#theme'] = 'wunderground_weather_forecast';
    $variables['#icon_set'] = $icon_set;
    $variables['#data'] = array_slice($days, 0, $number_of_days);
    $variables['#fields'] = $config['forecast_fields'];

    // Check if data is received.
    if ($data) {
      $output = render($variables);
    }
    else {
      // Return message if no data is retrieved.
      $output = t('No weather forecast available.');
    }

    return [
      '#children' => $output,
    ];
  }
}
