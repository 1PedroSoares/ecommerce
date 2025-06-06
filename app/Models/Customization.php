<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_name',
        'description',
    ];

    public function product()
    {
        return $this->BelongsTo(Product::class);
    }
}
