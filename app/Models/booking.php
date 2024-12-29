<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\detailMobil;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'namalengkap', 'tanggalpenjemputan', 'waktupenjemputan', 'identitas', 
        'tourguide', 'mobil_id', 'alamatpenjemputan'
    ];

    public function detailMobil(){
        return $this->belongsTo(detailMobil::class, 'mobil_id');
    }
}
