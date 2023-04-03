<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'user_id',
        'product_id',
        'programme_id',
        'user_id',
    ];

    // public function product()
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function programme()
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    //public function user()------->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
