<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'type',
        'title',
        'subtitle',
        'content',
        'image',
        'video_url',
        'button_text',
        'button_link',
        'urutan',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($section) {
            if ($section->urutan === 0 || $section->urutan === null) {
                $section->urutan = static::max('urutan') + 1;
            }
        });
    }
}
