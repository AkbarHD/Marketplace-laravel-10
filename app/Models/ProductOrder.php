<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function Buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
