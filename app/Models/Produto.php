<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'preco'];

    public function getNomeAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPrecoAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }
}