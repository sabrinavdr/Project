<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemantauan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_judul','id_deskripsi','id_tanggal','id_keterangan'
    ];
}
