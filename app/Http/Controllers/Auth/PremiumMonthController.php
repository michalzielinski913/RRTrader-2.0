<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumMonthController extends Controller
{
  public function index($name)
  {
  $wynik=  $name['uses'];
  echo $wynik;
  }
}
