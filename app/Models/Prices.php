<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'image',
    ];
}
