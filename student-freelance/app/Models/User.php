<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Exceptions\InvalidCastException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    public function bioExcerpt()
    {
        return strtok($this->bio, '.') . '.';
    }

    public function postingsHistory(): HasMany
    {
        if ($this->role !== UserRole::Employer->value) {
            return null;
        }
        return $this->hasMany(Posting::class, 'employer_id');
    }

    public function applicationsHistory()
    {
        if ($this->role !== UserRole::Freelancer->value) {
            return null;
        }
        // return $this->hasManyThrough(Posting::class, Application::class, 'posting_id', 'applicant_id');
        // return $this->hasMany(Application::class, 'applicant_id');
        return $this->belongsToMany(
            Posting::class,
            'applications',
            'applicant_id',
            'posting_id'
        );
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
