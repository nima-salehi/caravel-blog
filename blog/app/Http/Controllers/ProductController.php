<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
  //Reading data via api
  use App\Product;
  //
class ProductController extends Controller
{
    // //creating controller
    // public function index()
    // {
    //
    // }
    // public function update()
    // {
    //
    // }
    // public function store(Request $request)
    // {
    //
    // }
    // //
    //Reading data via api
    public function index()
    {
        // return App\Product::all();
        return App\Product::paginate();
    }
    public function update()
    {

    }
    public function store(Request $request)
    {

    }
    //
}
