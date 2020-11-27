<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }
}
