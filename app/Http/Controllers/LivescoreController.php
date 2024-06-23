<?php

namespace App\Http\Controllers;

use slvler\LiveScoreService\LiveScoreClient;
use Illuminate\Http\Request;

class LivescoreController extends Controller
{

    public function __construct(private $client = new LiveScoreClient()){

        $this->client= $client;
    }
    /**
     * Get data of Widget
     */
    public function widget(){

        $data = $this->client->fixtures()->getFixtures(['id'=> '1037958']);

        return view('widget')->with('details', $data);
    }
}
