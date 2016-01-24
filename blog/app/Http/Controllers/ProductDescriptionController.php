<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//Reading data via api
use App\Description;
//
class ProductDescriptionController extends Controller
{
    // //creating controller
    // public function index()
    // {
    //
    // }
    //
    // public function store()
    // {
    //
    // }
    // //
    //Reading data via api
    // public function index($productId)
    // {
    //   return Description::all();
    // }
    public function index($productId)
    {
      // return Description::ofProduct($productId)->get();
      return Description::ofProduct($productId)->paginate();
    }

    public function store(Request $request)
    {

    }
    //
}
