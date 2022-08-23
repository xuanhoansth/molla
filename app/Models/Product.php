<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        return $query;
    }
    public function category()
    {
        return $this->hasOne(ProductCategory::class,'id','category_id');
    }
}
