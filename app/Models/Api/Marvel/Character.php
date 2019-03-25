<?php

namespace App\Models\Api\Marvel;

use Illuminate\Support\Facades\Cache;

class Character
{
    public function all(array $parameters = array()) {

        $url = '/v1/public/characters';

//        $parameters = array();
//        $parameters['nameStartsWith'] = 'jean';

        try {
            $characters = ApiRequest::make($url, 'GET', $parameters);
        } catch(\Exception $e) {
            return "Não foi possível retornar a solicitação: " . $e->getMessage();
        }

        $this->saveCharactersCache($characters->data->results);

        return $characters;
    }

    public function find(int $id) {

        $character = $this->getCharacterCache($id);

        if(!$character) {
            $url = '/v1/public/characters/' . $id;

            try {
                $characterResult = ApiRequest::make($url, 'GET');
            } catch(\Exception $e) {
                return "Não foi possível retornar a solicitação: " . $e->getMessage();
            }

            $this->saveCharactersCache($characterResult->data->results);

            $character = $characterResult->data->results[0];
        }

        return $character;
    }

    private function saveCharactersCache($characters) {
        foreach ($characters as $character) {
            $this->saveCharacterCache($character);
        }

    }

    private function saveCharacterCache($character) {
        if(!Cache::has('CHARACTER-' . $character->id)) {
            Cache::put('CHARACTER-' . $character->id, $character, 20 * 60);
        }
    }

    private function getCharacterCache($characterId) {
        $character = null;

        if(Cache::has('CHARACTER-' . $characterId)) {
            $character = Cache::get('CHARACTER-' . $characterId);
        }

        return $character;
    }
}
