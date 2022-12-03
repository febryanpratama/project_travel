<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function photo()
    {
        return $this->hasMany(CarPhoto::class, 'car_id');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'car_id');
    }
}
