<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'resolusi',
        'path',
    ];

    public function home()
    {
        return $this->hasMany(Homes::class, 'id_image');
    }
    public function galeri()
    {
        return $this->hasMany(Galeris::class, 'id_image');
    }
}
