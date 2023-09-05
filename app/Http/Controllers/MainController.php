<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
        public function index($product = null) {
        $categories = Category::get();
            dump($categories);
            return view('index', ['categories' => $categories]);
        }

        public function category($code = 'mobile') {
            $category =  Category::where('code', $code)->first();
            dump($category);
            return view('category', compact('category') );
         }


}
