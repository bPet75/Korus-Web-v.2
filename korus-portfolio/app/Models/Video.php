<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'name',
        'source'
    ];

    public function gallery()
    {
        return $this->belongsTo('Gallery');
    }
}
