<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $response = Http::get('http://static.sekawanmedia.co.id/data.json')['data'];
        return view('home', compact('response'), $data);
    }
}
