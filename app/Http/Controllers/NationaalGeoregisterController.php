<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class NationaalGeoregisterController extends Controller
{
    public static function getData($postcode)
    {
        $client = new Client(['verify' => false]);

        $url = 'https://geodata.nationaalgeoregister.nl/locatieserver/free';

        $response = $client->request('GET', $url, [
            'query' => [
                'q' => 'postcode:' . $postcode
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        dump($data);

        if (!empty($data['response']['docs'])) {
            $locations = $data['response']['docs'];

            return $locations[0];
        } else {
            // Geen resultaten gevonden
            return null;
        }
        // Verwerk de ontvangen data zoals gewenst
        // ...

    }
}
