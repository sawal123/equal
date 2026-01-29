<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Slide extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'nama',
        'gambar',
        'link',
        'urutan',
    ];

    protected static function booted()
    {
        static::creating(function ($slide) {
            if ($slide->urutan === 0) {
                $slide->urutan = static::max('urutan') + 1;
            }
        });
    }
}
