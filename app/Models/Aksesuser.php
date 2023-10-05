<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksesuser extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_nama_user','id_username','id_email','id_peran'
    ];
}
