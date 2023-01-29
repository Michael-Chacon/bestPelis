<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['platform', 'image', 'access'];

    use HasFactory;

    public function platformsable()
    {
        return $this->morphTo();
    }

}
