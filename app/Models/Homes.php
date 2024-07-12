<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'id_image',
        'id_text',
    ];
    public function images()
    {
        return $this->belongsTo(Images::class,'id_image');
    }
    public function texts()
    {
        return $this->belongsTo(Texts::class,'id_text');
    }
}


