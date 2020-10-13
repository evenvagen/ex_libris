<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;
// use App\Models\Rating;

class Book extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    protected $fillable = ['user_id', 'title', 'author', 'description'];
}
