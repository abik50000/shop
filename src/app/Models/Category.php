<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
        'title',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id')->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id')->with('parent');
    }

    public function scopeAccordion($query)
    {
        return $query->with('children')
            ->whereNull('parent_id')
            ->get();
    }
}
