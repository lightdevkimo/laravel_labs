<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $Products = array(
        array(
            'id' => 1,
            'cat_id'=>1,
            'name' => 'Light',
            'price' => 200,
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'men-01.jpg'
        ),
        array(
            'id' => 2,
            'cat_id' => 1,
            'name' => 'Air Force 1 X',
            'price' => 250,
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'men-02.jpg'
        ),
        array(
            'id' => 3,
            'cat_id' => 1,
            'name' => 'Love Nana',
            'price' => 350,
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'men-03.jpg'
        ),
        array(
            'id' => 4,
            'cat_id' => 1,
            'name' => 'Classic Spring',
            'price'=>250,
            'des' => 'Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.',
            'imgurl' => 'men-01.jpg'
        ),
    );

    public $slug;
    public function mount($slug)
    {
        $key = array_search($slug, array_column(ProductController::$Products, 'id'));
        return view('single_product', ['products' => ProductController::$Products[$key]]);
    }
}
