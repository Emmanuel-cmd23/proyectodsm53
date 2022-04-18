<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $NombreUsuario
 * @property $NombreProducto
 * @property $Cantidad
 * @property $Precio
 * @property $Total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'NombreUsuario' => 'required',
		'NombreProducto' => 'required',
		'Cantidad' => 'required',
		'Precio' => 'required',
		'Total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreUsuario','NombreProducto','Cantidad','Precio','Total'];



}
