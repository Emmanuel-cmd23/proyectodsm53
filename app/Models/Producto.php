<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $NombreProducto
 * @property $PrecioProducto
 * @property $Descripcion
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'NombreProducto' => 'required',
		'PrecioProducto' => 'required',
		'Descripcion' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreProducto','PrecioProducto','Descripcion','imagen'];



}
