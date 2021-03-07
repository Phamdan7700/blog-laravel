<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'sumary',
        'img_url',
        'content',
        'count_view',
        'hightlight',
        'order',
        'status',
        'user_id',
        'type_of_news_id',
    ];

    protected function comments() {
        return $this->hasMany(Comment::class);
    }

    protected function user() {
        return $this->belongsTo(User::class);
    }
    protected function typeOfNews() {
        return $this->belongsTo(TypeOfNews::class);
    }

    protected function category() {
        return $this->belongsTo(Category::class);
    }


}
