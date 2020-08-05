<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function about(){
  return "About Us<br/><a href='http://localhost/laravel/farmerapp/public/home'>Home</a>";
}
public function contact(){
    return "Contact Us <br/><a href='http://localhost/laravel/farmerapp/public/home'>Home</a>";
}
}
