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
        $data = [
            'title' => 'API Client | IMDB'
        ];
		return view('movie/index', $data);
	}	

}
