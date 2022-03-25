<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasinaController extends Controller
{
public function apropos () {
        return view('pages.apropos');
      // return ' Hasina arj';
      
    }
public function services () {
      return view('pages.services');
}
public function liens () {
  return view('pages.liens');
}
public function home () {
  return view('pages.home');
}
}