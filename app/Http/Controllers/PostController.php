<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class PostController extends Controller
{
  //  fetch the data
    public function get_All(){
       $response= Http::get('https://jsonplaceholder.typicode.com/posts');
       // dd($response->collect());
      return view('welcome',['data'=>$response->collect()]) ;
    }
}
