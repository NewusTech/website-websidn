<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanans extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_image',
        'id_text',
        'insertfile',
    ];
    public function images()
    {
        return $this->belongsTo(Images::class);
    }
    public function texts()
    {
        return $this->belongsTo(Texts::class);
    }
}
