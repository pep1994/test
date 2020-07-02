<?php

namespace App\Http\Controllers;
use App\User;
use App\Apartment;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
      $users = User::all();
      $apartments = Apartment::all();


      return view('home', compact('users', 'apartments'));
  }
}
