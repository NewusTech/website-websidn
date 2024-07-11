<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogkategoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'slug',
    ];
    public function blog()
    {
        return $this->hasMany(Blogs::class, 'id_kategori');
    }
}
