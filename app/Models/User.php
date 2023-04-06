<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function comments()
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // public function materials()
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    // public function programmes()
    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }

    //public function products()
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // public function productPayment()
    public function productPayment()
    {
        return $this->belongsToMany(Product::class, 'product_user');
    }






    public function profilePhoto()
{
    return $this->morphOne(ProfilePhoto::class, 'imageable');
}


}
