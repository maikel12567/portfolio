<?php

namespace App\Models;
use App\Models\ProjectImage;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
