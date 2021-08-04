<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    //
    public function fetch()
    {

        
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'v5Dwe6eF46nWi5hrszdnniLd6VPMQjgZvUqGQrGn',
            'limit' => 10,
        ]);

        $quizzes = json_decode($response->body());

        return $quizzes;
    }
}
