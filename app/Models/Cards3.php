<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards3 extends Model
{
    use HasFactory;
    protected $fillable = ['nome','codigo', 'nivel', 'data', 'atributo'];
}
