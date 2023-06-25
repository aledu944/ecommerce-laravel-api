<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'slug',
        'name',
        'image',
        'description',
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }
}
