<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'volume',
        'price',
        'comments',
    ];

    // Eloquent; モデルに関連付けるテーブル
    protected $table = 'products';

}
