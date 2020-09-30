<?php namespace App\Controllers;

class Movie extends BaseController
{
    protected $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
    }

	public function index()
	{
        if($this->request->getGet('keyword') != null)
        {
            $keyword = 'http://www.omdbapi.com/?apikey=d6e3caf9&s=' . urlencode($this->request->getGet('keyword'));            
            $response = $this->client->get($keyword);
            $data = [
                'title' => 'API Client | IMDB',
                'movies' => json_decode($response->getBody(), true)
            ];                
        }
        else
        {
            $data = [
                'title' => 'API Client | IMDB',
                'movies' => ''
            ];
        }
		return view('movie/index', $data);
	}	

}
