<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
