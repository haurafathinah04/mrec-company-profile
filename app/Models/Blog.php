<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'judul',
        'highlight',
        'isi',
        'url',
        'link', // Opsional jika masih ingin dipakai untuk redirect eksternal
    ];
}