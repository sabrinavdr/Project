<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_dokumen', 'nama_dokumen', 'asal_dokumen', 'jenis', 'tanggal_dokumen', 'tanggal_masuk', 'proses'
    ];
}
