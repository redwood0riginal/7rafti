<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'user_id',
        'status'
    ];
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
