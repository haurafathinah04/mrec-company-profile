<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Support\Facades\Storage;

#[Fillable(['project_name', 'url_image_project', 'category_project'])]
#[Hidden(['id', 'created_at', 'updated_at'])]
class Project extends Model
{
    protected static function booted(): void
    {
        static::deleting(function (Project $project): void {
            if ($project->url_image_project) {
                Storage::disk('public')->delete($project->url_image_project);
            }
        });
    }
}
