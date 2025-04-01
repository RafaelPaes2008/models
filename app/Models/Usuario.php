<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'email'];

    public function getNomeAttribute($value)
    {
        return ucfirst($value);
    }
}
