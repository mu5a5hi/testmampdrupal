<?php

/**
 * @file
 * Contains \Drupal\wunderground_weather\Controller\LocationAutocompleteController.
 */

namespace Drupal\wunderground_weather\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Returns autocomplete responses for wunderground weather.
 */
class LocationAutocompleteController extends ControllerBase {

  public function autocomplete(Request $request) {
    $text = $request->query->get('q');
    $client = new Client(['base_uri' => 'http://autocomplete.wunderground.com']);

    try {
      $response = $client->get('aq?query=' . $text)->getBody();
      $data = json_decode($response->getContents());

      // Extract key and value from the returned array.
      $results = [];
      foreach ($data->RESULTS as $result) {
        $results[] = ['value' => $result->name . ' [' . $result->l . ']', 'label' => $result->name];
      }

      return new JsonResponse($results);
    }
    catch (RequestException $e) {
      watchdog_exception('wunderground_weather', $e);
    }
  }
}
