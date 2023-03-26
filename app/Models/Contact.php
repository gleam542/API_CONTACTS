<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'subject',
        'company',
        'department',
        'email',
        'content'
    ];
}