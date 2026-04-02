<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    // can be filled with function
    public function sum() {
        $a = 10;
        $b = 20;
        $c = $a + $b;
        return "Jumlah: $c";
    }

    public function multiply(Request $request) {
        $a = $request->par1;
        $b = $request->par2;
        $c = $a * $b;
        return "Hasil Perkalian: $c";
    }

    public function divide(Request $request) {
        $a = $request->par1;
        if (isset($request->par2)) {
            $b = $request->par2;
        } else {
            $b = 1;
        }
        $c = $a / $b;
        return "Hasil Pembagian: $c";
    }

}
