<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Freelancer extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function bioExcerpt()
    {
        return strtok($this->bio, '.') . '.';
    }
}
