<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'heading',
        'subheading',
        'paragraph',
    ];

    public function home()
    {
        return $this->hasMany(Homes::class, 'id_text');
    }
    public function galeri()
    {
        return $this->hasMany(Galeris::class, 'id_text');
    }
}
