<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'category'  => new CategoryResource( Category::find($this->category_id)),
            'images'    => new ProductImageCollection(Product::find($this->id)->productImages),
            // 'images' => 
        ];
    }
}
