<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\booking;

class detailMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'ukuran', 'mobil', 'foto', 'kursi', 'pintu', 'bags', 'transmisi', 'harga'
    ];

    public function bookings(){
        return $this->hasMany(booking::class);
    }
}
