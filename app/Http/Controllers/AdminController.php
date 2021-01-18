<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDashboard() {
    	return view("admin.dashboard");
    }


    public function createNewProduct() {
    	$category =  Category::all();
    	return view("admin.create", compact("category"));
    }

    public function createNewProductRecord(Request $request) {

        $cat_ids = implode(",", $request->get("cats"));

		Product::create([
			"title" => $request->get("product_name"),
			"price" => $request->get("price"),
			"desctiption" => $request->get("desc"),
			"image_address" => "",
			"cat_ids" => $cat_ids
		]);

		return "saved";

    }


    public function createCategory() {
        return view("admin.cat");
    }


    public function createCategoryRecord(Request $request) {
        Category::create([
            "title" => $request->get("name")
        ]);
        return "saved";
    }


}
