<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'image_path'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
