<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Support\Facades\Storage;

<<<<<<< HEAD
#[Fillable(['project_name', 'description', 'year', 'team_members', 'url_image_project', 'category_project'])]
#[Hidden(['id', 'created_at', 'updated_at'])]
=======
#[Fillable(['project_name', 'url_image_project', 'category_project'])]
>>>>>>> c1c14db903a294fc759c4db6f16c2f302847b93d
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