<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryCollection;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->query('category');
        
        if( $query ){
            $products = Category::with('products')->get();
            return  new ProductCategoryCollection( $products );
        }

        $search = $request->query('search');
        if( $search ){
            return new ProductCollection(Product::where('name', 'LIKE', '%'.$search.'%')->get());
        }

        return new ProductCollection(Product::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required|image'
    //     ]);
    //     $file = $request->file('image');
    //     $name = $file->getClientOriginalName();
    //     $path = $request->image->storeAs('public/products', $name);
    //     return Storage::url($path);

    // }

    /**
     * Display the specified resource.
     */
    public function show(string $term)
    {
        $product = Product::where('id',$term)
            ->orWhere('slug',$term)
            ->get();

        if( !$product ){
            return response(['message' => 'El producto no existe'], 404);
        }

        return new ProductResource( $product[0] );
    }
}
