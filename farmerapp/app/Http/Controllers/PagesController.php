<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function about(){
  return "About Us<br/><a href='".route('home')."'>Home</a>";
}
public function contact(){
    return "Contact Us <br/><a href='".route('home')."'>Home</a>";
}
}
