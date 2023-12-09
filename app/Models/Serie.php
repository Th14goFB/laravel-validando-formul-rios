<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    //fillable ignora tudo que não estiver nela.
    protected $fillable = ['nome'];
}
