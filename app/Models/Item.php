<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'item_name',
        'description',
        'category',
        'price',
        'stock_quantity',
        'unit',
        'supplier',
        'date_added',
        'image_url',
        'specifications',
        'ratings',
        'comments',
        'availability',
    ];
}
