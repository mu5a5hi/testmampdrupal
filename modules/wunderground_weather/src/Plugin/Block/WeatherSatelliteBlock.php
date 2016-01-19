<?php

/**
 * @file
 * Contains \Drupal\wunderground_weather\Plugin\Block\WeatherSatelliteBlock
 */

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\wunderground_weather\Controller\RequestDataController;

/**
 * Provides a block with weather satellite images.
 *
 * @Block(
 *  id = "wunderground_weather_satellite_block",
 *  admin_label = @Translation("Weather satellite block"),
 *  module = "wunderground_weather"
 * )
 */
class WeatherSatelliteBlock extends BlockBase {
  public $base_url = 'http://api.wunderground.com/api/';

  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    // Autocomplete to get location.
    $form['location'] = [
      '#title' => t('Location path'),
      '#type' => 'textfield',
      '#description' => t('Search for your city to determine the Wunderground location path.'),
      '#maxlength' => 120,
      '#required' => TRUE,
      '#autocomplete_route_name' => 'wunderground_weather.autocomplete',
      '#default_value' => isset($config['location']) ? $config['location'] : '',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $settings = \Drupal::config('wunderground_weather.settings');
    $config = $this->getConfiguration();

    preg_match('#\[(.*?)\]#', $config['location'], $match);

    $options = [
      'api' => 'api',
      'key' => $settings->get('api_key'),
      'data_feature' => 'geolookup',
      'path' => $match[1],
    ];
    $request = new RequestDataController();
    $geolookup = $request->get($options);

    $image_path = 'api/' . $settings->get('api_key') . '/animatedsatellite/image.gif';
    $image_url = Url::fromUri(WUNDERGROUND_WEATHER_BASE_URL . $image_path, [
      'query' => [
        'borders' => 1,
        'key' => 'sat_ir4',
        'lat' => $geolookup->location->lat,
        'lon' => $geolookup->location->lon,
        'num' => 8,
        'radius' => 200,
      ]
    ]);

    $this->setConfigurationValue('location', $form_state->getValue(['location']));
    $this->setConfigurationValue('image_url', $image_url->toUriString());
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();
    $output = [
      '#theme' => 'image',
      '#uri' => $config['image_url'],
    ];

    return $output;
  }
}
