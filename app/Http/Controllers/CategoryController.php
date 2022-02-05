<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

class CategoryController extends Controller
{
    public $slug;
    public function mount($slug)
    {

       // $key = array_unique($slug, HomeController::$categories, 'id');

        $key = array_search($slug, array_column(HomeController::$categories, 'id'));
        
        return view('hello', ['cat' => HomeController::$categories[$key]]);
    }
}
