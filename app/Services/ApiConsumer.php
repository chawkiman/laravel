<?php

namespace App\Services;

class ApiConsumer
{
    protected $client;
    protected $endpoint;

    public function config($endpoint)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8001/api/'
        ]);

        $this->endpoint = $endpoint;
    }
    

    public function get($search = null): Array
    {
        $params = ['query' => ['q' => $search]];
        $request = $this->client->get($this->endpoint, $params);

        $response = $request->getBody()->getContents();
        
        return json_decode($response);
    }

    public function post(Array $params) : bool
    {
        $request = $this->client->post($this->endpoint, ['form_params'=> $params]);

        if($request->getStatusCode() == 200)
        {
            return true;
        }

        return false;

    }

    public function put(Array $params) : bool
    {
        $request = $this->client->put($this->endpoint, ['form_params'=> $params]);

        if($request->getStatusCode() == 200)
        {
            return true;
        }

        return false;

    }


    public function delete() : bool
    {
        $request = $this->client->delete($this->endpoint);

        if($request->getStatusCode() == 200)
        {
            return true;
        }

        return false;
    }
    
}
