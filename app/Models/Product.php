<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'type',
        'is_customizable'
    ];

    public function customizations()
    {
        return $this->hasmany(Customization::class);
    }
}
