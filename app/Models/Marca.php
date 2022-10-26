<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome'];

    public function eletrodomesticos()
    {
        return $this->hasMany(Eletrodomestico::class, 'marca_id');
    }
}
