<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
