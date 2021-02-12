<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_link', 'email', 'insta_link', 'insta', 'work'
    ];

    protected $table = 'contacts';
}
