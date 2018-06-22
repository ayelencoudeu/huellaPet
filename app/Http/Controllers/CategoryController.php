<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;

class CategoryController extends Controller
{
    public function Show(Category $category)
    {	
    	$dato = $category->products()->paginate(9);
    	return view('categories.show')->with(compact('category','dato'));
    }

    public function tienda()
    {
    	$mostrar = Category::All();
    	return view('categories.tienda')->with(compact('mostrar'));
    }
}
