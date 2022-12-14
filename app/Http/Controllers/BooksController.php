<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    public function index()
    {
        $response = Http::get('https://www.googleapis.com/books/v1/users/1112223334445556677/bookshelves&key=yourAPIKey');
    
        $jsonData = $response->json();
          
        dd($jsonData);
    }
}
