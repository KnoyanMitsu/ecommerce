<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'product_id',
        'quantity',
    ];
    protected $table = 'cart';
    use HasFactory;
}
