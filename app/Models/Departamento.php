<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table='departamentos';
    protected $primaryKey='id_departamento';
    protected $fillable=['nombre_dep, descripcion_emp'];
    protected $guarded=[];
    public $timestamps=false;
}
