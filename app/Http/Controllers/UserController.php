<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    //
    public function getAllProduct() {
    	$products = Product::all();
    	return view("front.home", compact("products"));
    }
}
