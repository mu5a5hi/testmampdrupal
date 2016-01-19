<?php
/**
 * @file
 * Contains \Drupal\wunderground_weather\Controller\RequestDataController.
 */

namespace Drupal\wunderground_weather\Controller;

use GuzzleHttp\Client;

class RequestDataController {

  private $client;

  function __construct() {
    $this->client = new Client(['base_uri' => 'http://api.wunderground.com']);
  }

  function get($options) {
    $path = '';
    foreach ($options as $argument) {
      $path .= '/' . $argument;
    }
    $path .= '.json';

    try {
      $data = $this->client->get($path)->getBody();
      return json_decode($data->getContents());

    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}
