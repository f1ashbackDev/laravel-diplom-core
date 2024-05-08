<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
        'price',
        'categories_id',
        'description',
        'smail_description'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categories_id');
    }
}
