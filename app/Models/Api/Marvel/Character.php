<?php

namespace App\Models\Api\Marvel;

class Character
{
    public function all() {

        $url = '/v1/public/characters';

        $parameters = array();
//        $parameters['nameStartsWith'] = 'jean';

        try {
            $characters = ApiRequest::make($url, 'GET', $parameters);
        } catch(\Exception $e) {
            return "Não foi possível retornar a solicitação: " . $e->getMessage();
        }

        return $characters;
    }

    public function find(int $id) {

        $url = '/v1/public/characters/' . $id;

        try {
            $character = ApiRequest::make($url, 'GET');
        } catch(\Exception $e) {
            return "Não foi possível retornar a solicitação: " . $e->getMessage();
        }

        return $character;
    }
}
