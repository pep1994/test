<?php

namespace App\Http\Controllers;
use App\Apartment;

use Illuminate\Http\Request;

class ApartamentController extends Controller
{
  public function search(){

    $apartments = Apartment::paginate(30);

    return view('search', compact('apartments'));
  }
}
