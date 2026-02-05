<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoutubeVideo extends Model
{
    protected $fillable = [
        'title',
        'youtube_url',
        'youtube_embed',
        'sort',
    ];

    public static function convertToEmbed($url): string
    {
        preg_match(
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $url,
            $match
        );

        return isset($match[1])
            ? 'https://www.youtube.com/embed/' . $match[1]
            : '';
    }
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->sort = static::max('sort') + 1;
        });
    }

    public static function moveUp(self $record)
    {
        $prev = self::where('sort', '<', $record->sort)
            ->orderByDesc('sort')
            ->first();

        if ($prev) {
            [$record->sort, $prev->sort] = [$prev->sort, $record->sort];
            $record->save();
            $prev->save();
        }
    }

    public static function moveDown(self $record)
    {
        $next = self::where('sort', '>', $record->sort)
            ->orderBy('sort')
            ->first();

        if ($next) {
            [$record->sort, $next->sort] = [$next->sort, $record->sort];
            $record->save();
            $next->save();
        }
    }
}
