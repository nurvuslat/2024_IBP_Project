<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rotation extends Model
{
    use HasFactory;
    protected $table = 'rotations';

    protected $fillable = [
        'name',
        'location',
        'guide_name',
        'guide_phone',
        'price',
        'time',
        'description'
    ];
}
