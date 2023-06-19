<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class CityController extends Controller
{
    public function gettingUf() {
        $uf = request()->input('uf');

        $client = new Client();

        $cidades = [];

        if ($uf) {
            try {
            $response = $client->get("https://brasilapi.com.br/api/ibge/municipios/v1/{$uf}");
            $data = json_decode($response->getBody(), true);
            
            $cidades = $data;
            
            return view('cep-search', compact('cidades'));
            } catch (\Exception $e) {
            // no-error-message
            }
        } else {
            return view('cep-search', compact('cidades'));  
        }
    }

    public function index() {
        $cidades = [];

        return view('cep-search', compact('cidades'));      
    }
}
