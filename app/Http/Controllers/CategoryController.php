<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCategoryRequest;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CategoryCollection( Category::all() );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewCategoryRequest $request)
    {
        $request->validated();
        
        $request['slug'] = $this->createSlug($request['name']);
        $category = Category::create($request->all());
        
        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    private function createSlug($text) {
        $text = strtolower($text); // Convertir a minúsculas
        $text = preg_replace('/[^a-z0-9]+/', '_', $text); // Eliminar caracteres especiales
        $text = trim($text, '_'); // Eliminar guiones al inicio y al final
        $text = preg_replace('/_+/', '_', $text); // Reemplazar múltiples guiones por uno solo
    
        return $text;
    }

}