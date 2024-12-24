<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'namalengkap', 'tanggalpenjemputan', 'waktupenjemputan', 
        'tanggalpengantaran', 'waktupengantaran', 'identitas', 
        'tourguide', 'mobil_id', 'alamatpenjemputan'
    ];

    public function detailMobil(){
        return $this->belongsTo(booking::class);
    }
}
