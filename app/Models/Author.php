<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'image', 'dob', 'languages', 'expertise', 'freelance',
        'bio', 'campus', 'dsp', 'generation'
    ];
}
