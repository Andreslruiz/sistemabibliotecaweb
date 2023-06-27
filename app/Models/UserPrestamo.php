<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPrestamo
 *
 * @property $id
 * @property $fecha_prestamo
 * @property $fecha_devolucion
 * @property $idejemplar
 * @property $idusuario
 * @property $created_at
 * @property $updated_at
 *
 * @property Ejemplar $ejemplar
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UserPrestamo extends Model
{
    
    static $rules = [
		'fecha_prestamo' => 'required',
		'fecha_devolucion' => 'required',
		'idejemplar' => 'required',
		'idusuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_prestamo','fecha_devolucion','idejemplar','idusuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ejemplar()
    {
        return $this->hasOne('App\Models\Ejemplar', 'id', 'idejemplar');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idusuario');
    }
    

}
