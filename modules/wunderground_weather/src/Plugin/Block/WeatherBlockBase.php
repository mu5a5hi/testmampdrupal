<?php
/**
 * @file
 * Contains \Drupal\wunderground_weather\Plugin\Block\WeatherBlockBase
 */

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;

abstract class WeatherBlockBase extends BlockBase {

  public $iconNames;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->iconNames = [
      'chanceflurries',
      'chancerain',
      'chancerain',
      'chancesleet',
      'chancesleet',
      'chancesnow',
      'chancetstorms',
      'chancetstorms',
      'clear',
      'cloudy',
      'flurries',
      'fog',
      'hazy',
      'mostlycloudy',
      'mostlysunny',
      'partlycloudy',
      'partlysunny',
      'sleet',
      'rain',
      'sleet',
      'snow',
      'sunny',
      'tstorms',
      'tstorms',
      'unknown',
      'cloudy',
      'partlycloudy',
    ];
  }

  /**
   * Transform the url to user an other icon set.
   *
   * @param string $url
   *   The original icon path from the wunderground API passed by reference.
   * @param string $set
   *   The letter to identify an icon set.
   *
   * @return string
   *   Url of the selected icon set.
   */
  public static function getIconUrl($set, $icon) {
    $path = drupal_get_path('module', 'wunderground_weather');
    return $path . '/icons/' . $set . '/' . $icon . '.gif';
  }

  /**
   * Get a sample of icons of a icon set.
   *
   * @param string $set
   *   The letter to identify an icon set.
   *
   * @return string
   *   A div containing a sample of icons from an icon set.
   */
  public function getIconSetSample($set) {
    $all_icons = $this->getIconNames();
    $sample = [
      $all_icons[8],
      $all_icons[9],
      $all_icons[15],
      $all_icons[18],
      $all_icons[20],
    ];

    $sample_icons = '';
    foreach ($sample as $name) {
      $image_variables = [
        '#theme' => 'image',
        '#uri' => $this->getIconUrl($set, $name),
      ];
      $sample_icons .= render($image_variables);
    };

    return $sample_icons;
  }

  /**
   * Get all available icon names.
   *
   * @return array
   *   All available icon names.
   */
  public function getIconNames() {
    return $this->iconNames;
  }

  /**
   * An array containing names for all wunderground icon names.
   *
   * @param array $icon_names
   *   Set the available icon names.
   */
  protected function setIconNames($icon_names) {
    $this->iconNames = $icon_names;
  }
}