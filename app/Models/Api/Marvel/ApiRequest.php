<?php

namespace App\Models\Api\Marvel;

use GuzzleHttp\Client;

class ApiRequest
{
    private static $endpoint = 'https://gateway.marvel.com';

    public static function make(string $url, string $method, array $parameters = array()) {

        $timestamp = time();
        $hash = md5($timestamp  . env('MARVEL_API_PRIVATE_KEY') . env('MARVEL_API_PUBLIC_KEY'));

        $parameters['ts'] = $timestamp;
        $parameters['hash'] = $hash;
        $parameters['apikey'] = env('MARVEL_API_PUBLIC_KEY');

        $client = new Client();
        $response = $client->request('GET', self::$endpoint . $url . '?' . http_build_query($parameters));

        if($response->getStatusCode() != 200) {
            throw new \Exception($response->getBody());
        }

        return json_decode($response->getBody());

    }
}
