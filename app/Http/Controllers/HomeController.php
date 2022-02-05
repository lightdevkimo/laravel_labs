<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class HomeController extends Controller
{
    public static $categories = array(
        array(
            'id' => 1,
            'name' => 'Wemen',
            'upspan' => 'Best Clothes For Women',
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'baner-right-image-01.jpg'
        ),
        array(
            'id' => 2,
            'name' => 'Men',
            'upspan' => 'Best Clothes For Men',
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'baner-right-image-02.jpg'
        ),
        array(
            'id' => 3,
            'name' => 'Kids',
            'upspan' => 'Best Clothes For Kids',
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'baner-right-image-03.jpg'
        ),
        array(
            'id' => 4,
            'name' => 'Accessories',
            'upspan' => 'Best Accessories ',
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'baner-right-image-04.jpg'
        ),
    );
    public function displaycategories(){
        return view('welcome', [
            'categories' => HomeController::$categories,
            'products' => ProductController::$Products
        ]);
    }
    public function displaywithcategory(){}
}
