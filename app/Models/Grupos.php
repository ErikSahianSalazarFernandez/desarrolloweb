<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model {
    use HasFactory;
    protected $table = "tb_grupos";
    //protected $primaryKey = "id";
    protected $fillable = [
        'nombre',
        'clave'
    ];
}
