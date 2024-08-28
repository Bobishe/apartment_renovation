<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoOtchety extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'description',
        'url_foto',
        'url_design',
        'url_video'
    ];


    public function getEmbedUrlAttribute()
    {
        $url = $this->attributes['url_video'];

        // Проверяем, что URL начинается с "https://youtu.be/"
        if (strpos($url, 'https://youtu.be/') === 0) {
            // Преобразуем ссылку формата "https://youtu.be/VIDEO_ID" в "https://www.youtube.com/embed/VIDEO_ID"
            $videoId = substr($url, strlen('https://youtu.be/'));
            return 'https://www.youtube.com/embed/' . $videoId;
        }

        // Проверяем, что URL начинается с "https://www.youtube.com/watch?v="
        if (strpos($url, 'https://www.youtube.com/') === 0) {
            // Преобразуем ссылку формата "https://www.youtube.com/watch?v=VIDEO_ID" в "https://www.youtube.com/embed/VIDEO_ID"
            $videoId = substr($url, strlen('https://www.youtube.com/'));
            return 'https://www.youtube.com/embed/' . $videoId;
        }

        // Если формат другой, возвращаем оригинальный URL
        return $url;
    }
}
