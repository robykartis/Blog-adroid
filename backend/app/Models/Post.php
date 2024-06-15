<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'category_id',
        'image',
        'is_published'
    ];
    public function m_category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
