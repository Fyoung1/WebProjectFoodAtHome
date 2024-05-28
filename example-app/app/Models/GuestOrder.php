<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_orders',
        'name',
        'phone',
        'address',
        'product',
        'quantity',
    ];
}
