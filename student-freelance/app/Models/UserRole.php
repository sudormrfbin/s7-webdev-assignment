<?php

namespace App\Models;

enum UserRole: string
{
    case Freelancer = 'freelancer';
    case Employer = 'employer';
}
