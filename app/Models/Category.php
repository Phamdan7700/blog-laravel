<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'order',
        'status',
    ];

    protected function typeOfNews(){
        return $this->hasMany(TypeOfNews::class);
    }
    protected function news() {
        return $this->hasManyThrough(News::class,TypeOfNews::class);
    }

    
}
