<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'perusahaan',
        'alamat',
        'whatsapp',
        'telepon',
        'email',
        'google_maps',
    ];
}
