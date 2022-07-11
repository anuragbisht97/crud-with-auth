<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function getproducts() {
		$data = Product::all();
		return view('products.index', compact('data'));
	}

	public function createproduct() {
		return view('products.create');
	}

	public function storeproduct(Request $request) {
		Product::create([
			'product_name' => $request->product_name,
			'category' => $request->category,
			'description' => $request->description,
			'price' => $request->price
		]);
		return redirect()->to('/getproducts');
	}

	public function editproduct(Request $request) {
		$data = Product::where('pki_product_id', '=', (int)$request->id)->first();
		return view('products.edit', compact('data'));
	}

	public function updateproduct(Request $request) {
		$product = Product::where('pki_product_id', '=', (int)$request->id)->first();

		$product->product_name = $request->product_name;
		$product->category = $request->category;
		$product->description = $request->description;
		$product->price = $request->price;

		$product->save();

		return redirect()->to('/getproducts');
	}

	public function deleteproduct(Request $request) {
		$product = Product::where('pki_product_id', '=', (int)$request->id)->first();
		$product->delete();

		return redirect()->to('/getproducts');
	}

}
