<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    // model untuk menyimpan data kategori
    // field yang dapat di assign
    // masukan field yang mau di assign
    protected $fillable = [
        'name',
        'photo',
        'slug'
    ];

    protected $hidden = [

    ];
}
