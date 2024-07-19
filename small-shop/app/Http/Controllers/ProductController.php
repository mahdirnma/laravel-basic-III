<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductPriceRequest;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $products = Product::all()->where('is_active',true);
        $categories = Category::all();
        return view('admin.product.index',compact('products','categories'));
    }
    public function add(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $categories = Category::all();
        return view('admin.product.add',compact('categories'));
    }
    public function create(StoreProductRequest $request){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $category_id = $request->input('category');
        $entity= $request->input('entity');
        $product=Product::create([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'category_id' => $category_id,
            'entity' => $entity,
        ]);
        if ($product)
            return to_route('product.index');
    }

    public function update(Product $product)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $categories = Category::all();
        return view('admin.product.update',compact('product','categories'));
    }
    public function edit(Product $product,StoreProductRequest $request){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $category_id = $request->input('category');
        $entity= $request->input('entity');
        $product->update([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'category_id' => $category_id,
            'entity' => $entity,
        ]);
        if ($product){
            return to_route('product.index');
        }
    }
    public function update_price(Product $product)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.product.update_price',compact('product'));
    }
    public function edit_price(Product $product,StoreProductPriceRequest $request){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $price = $request->input('price');
        $product->update([
            'price' => $price,
        ]);
        if ($product){
            return to_route('product.index');
        }
    }


}
