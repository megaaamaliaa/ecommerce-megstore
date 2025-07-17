<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    // model untuk menyimpan data product
    // field yang dapat di assign
    // masukan field yang mau di assign
    protected $fillable = [
        'name',
        'users_id',
        'categories_id',
        'price',
        'description',
        'slug',

    ];

    protected $hidden = [

    ];

    // relasi dengan Gallery
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    // relasi dengan user
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    // relasi dengan category
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

}

