<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $table = 'papers';

    protected $fillable = [
        'file_name',
        'department',
        'subject',
        'semester',
        'year',
        'system',
        'file_path',
    ];
}

