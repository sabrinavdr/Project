<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tanggal_dokumen','id_nama_dokumen','id_asal_dokumen','id_jenis_dokumen','tanggal_pembuatan','periode_preservasi'
    ];
}
