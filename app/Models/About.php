<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote1','quote1a','quote2', 'quote2a', 'quote2b'
    ];

    protected $table = 'abouts';
}
