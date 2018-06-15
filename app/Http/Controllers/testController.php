<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class testController extends Controller
{
    public function welcome()
    {	
    	
    	$dato=Product::all(); 
    	return view('home')->with(compact('dato'));
    }
}
