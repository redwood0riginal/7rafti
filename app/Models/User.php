<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
    ];

    protected function profile(): Attribute{
        return Attribute::make(get: function($value){
            return $value ? 'storage/profileImages/' . $value : '/user-profile.jpg';
        });
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function reviewsGiven()
    {
        return $this->hasMany(Review::class, 'client_id');
    }

    public function reviewsReceived()
    {
        return $this->hasMany(Review::class, 'craftsman_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'client_id');
    }

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
