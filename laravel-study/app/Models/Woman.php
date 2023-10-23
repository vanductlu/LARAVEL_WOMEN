<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'field_of_work',
        'image_url',
        'birth_date',
    ];
}
