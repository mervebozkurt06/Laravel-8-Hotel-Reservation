<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    #One To Many (Inverse) / Belong To
    #Category.php and Hotel.php --> One to many relationship
    public function category()
    {
        return $this->belongsTo(Category::class); #artık istediğimiz alanı çekebiliriz
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
