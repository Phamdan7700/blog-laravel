<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'order',
        'status',
        'category_id',
    ];

    protected function Category() {
        return $this->belongsTo(Category::class);
    }

    protected function news() {
        return $this->hasMany(News::class);
    }
}
