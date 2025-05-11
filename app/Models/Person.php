<?php

namespace App\Models;
use App\Enum\UserRole;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'tbl_person';

    protected $fillable = [
        'fullname',
        'nic',
        'dob',
        'gender',
        'address',
        'contact',
        'email',
    ];
}
