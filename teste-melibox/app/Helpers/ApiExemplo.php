<?php

namespace App\Helpers;

class ApiExemplo
{
    private $api;
    public function __construct()
    {
        $this->api = Http::withHeaders([
            'Authorization' => 'Bearer ',

        ]);
    }

    /**
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function getApi(): \Illuminate\Http\Client\PendingRequest
    {
        return $this->api;
    }

}   
