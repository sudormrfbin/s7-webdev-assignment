<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    public function employer() {
        return $this->belongsTo(User::class);
    }

    public function descriptionExcerpt() {
        return strtok($this->description, '.');
    }
}
