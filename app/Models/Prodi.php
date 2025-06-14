<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    // Izinkan kolom-kolom ini untuk mass assignment
    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
    ];
}
