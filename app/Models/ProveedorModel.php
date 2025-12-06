<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProveedorModel extends Model
{
    use HasFactory;
       protected $primaryKey = 'idProveedor';    
       protected $table = 'proveedores';
       protected $fillable = [
            'razonSocial',
            'nombre',
            'direccion',
            'telefono',
            'correo',
            'rfc',
       ];
}
