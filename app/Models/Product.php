<?php

namespace App\Models;


use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,Rateable;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'image',
        'description',
    ];

    // public function comments()
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // public function user() ------> admin
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userPayment()
    {
        return $this->belongsToMany(User::class, 'product_user');
    }
}
