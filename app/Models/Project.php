<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['image', 'title', 'description'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tags');
    }
}

