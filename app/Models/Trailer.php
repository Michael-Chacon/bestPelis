<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $fillable = ['url'];
    use HasFactory;

    public function trailersable()
    {
        return $this->morphTo();
    }
}
