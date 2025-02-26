<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'address',
        'Beds',
        'Baths',
        'sqft',
        'type',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(Image::class,'announcement_id');
    }
}

