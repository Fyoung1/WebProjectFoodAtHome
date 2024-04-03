<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MilkProduct extends Model
{

    use HasFactory;
    /**
     * Связь «многие ко многим» таблицы `products` с таблицей `baskets`
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carts() {
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'calories',
    ];

}
