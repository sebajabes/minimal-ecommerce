<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    use HasFactory;
    //
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
