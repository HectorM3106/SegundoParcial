<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = "Materia";
    protected $fillabele = ['id', 'name', 'state', 'created_at', 'updated_at'];
}
