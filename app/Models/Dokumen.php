<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_nomor_arsip','id_nama_arsip','id_asal_arsip','id_jenis_arsip','id_tanggal_keluar','id_pengirim','id_penerima','proses'
    ];
}
