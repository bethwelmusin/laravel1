<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class HomeController extends Controller
{
   public function index(){

   //  $services = Services::all();

    return view('index', compact('services') );


   }
}
