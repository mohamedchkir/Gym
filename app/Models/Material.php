<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'image',
        'description',
    ];

    // public function user()--------> admin
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
