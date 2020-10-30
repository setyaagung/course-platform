<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description',
        'about_instructor', 'discount_price', 'actual_price', 'playlist_url',
        'view_count', 'subscriber_count', 'status', 'photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
