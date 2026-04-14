<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show() {
        // $category = 'Mouse';
        // $button = '<button>Click Here</button>';
        // return view('home', [
        //     #key => value (assosiative array)
        //     'product_category' => $category,
        //     'product_name' => 'Logitech G502 Hero',
        //     'button' => $button
        // ]);

        return view('home', [
            'product_categories' => ProductCategory::with(['products'])->get()
        ]);
    }
}
