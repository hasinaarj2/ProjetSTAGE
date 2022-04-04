<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
class HasinaController extends Controller
{
public function apropos () {
        return view('pages.apropos');
      // return ' Hasina arj';
      
    }
public function services () {
  $produits = Product::orderBy('product_name', 'desc')->paginate();
     /* $produits = DB::table('products')

       //->orderBy('Product_name', 'asc')
       ->inRandomOrder()       
       ->paginate(2);*/

                

      return view('pages.services')->with('produits', $produits);
}
public function liens () {
  return view('pages.liens');
}
public function home () {
  return view('pages.home');
}
}