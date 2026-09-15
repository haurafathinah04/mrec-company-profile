<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['judul', 'url', 'deskripsi'])]
class Blog extends Model
{
}
