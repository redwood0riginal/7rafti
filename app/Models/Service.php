<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'user_id',
    ];
    public function craftsman()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
