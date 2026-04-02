<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show() {
        $category = 'Mouse';
        $button = '<button>Click Here</button>';
        return view('home', [
            #key => value (assosiative array)
            'product_category' => $category,
            'product_name' => 'Logitech G502 Hero',
            'button' => $button
        ]);
    }
}
