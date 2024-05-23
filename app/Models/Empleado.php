<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table='empleados';
    protected $primaryKey='id_empleado';
    protected $fillable=['nombre_emp, apellido_emp, cargo_emp, telefono_emp, id_departamento'];
    protected $guarded=[];
    public $timestamps=false;



}
