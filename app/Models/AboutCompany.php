<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    protected $fillable = [
        'about',
        'visi',
        'misi',
        'gambar',
    ];
}
