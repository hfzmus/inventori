<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'part_number',
        'starting',
        'received',
        'shipped',
        'on_hand',
        'min_stock'
    ];

    public $timestamps = true;
}
