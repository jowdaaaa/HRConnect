<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HRUsers extends Model
{
    protected $table = 'hr_users';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'username',
        'password',
        'role',
    ];
}
