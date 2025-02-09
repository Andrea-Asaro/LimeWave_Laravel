<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function acceptedArticles()
    {
        return $this->hasMany(Article::class)->where('is_accepted', true);
    }
}
