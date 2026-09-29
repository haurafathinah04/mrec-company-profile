<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['judul', 'url', 'deskripsi', 'link'])]
class Blog extends Model
{
}
