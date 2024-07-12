<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corosels extends Model
{
    use HasFactory;

    protected $fillable = [
        'resolusi',
        'path',
    ];
}
