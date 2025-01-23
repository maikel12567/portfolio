<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\ProjectImage;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'image_path'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function images()
{
    return $this->hasMany(ProjectImage::class);
}

}
