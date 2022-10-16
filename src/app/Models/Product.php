<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->with('parent');
    }
}
