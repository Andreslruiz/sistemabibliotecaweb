<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ejemplar
 *
 * @property $id
 * @property $codigo
 * @property $localizacion
 * @property $libro
 * @property $created_at
 * @property $updated_at
 *
 * @property UserPrestamo[] $userPrestamos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ejemplar extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'localizacion' => 'required',
		'libro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','localizacion','libro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userPrestamos()
    {
        return $this->hasMany('App\Models\UserPrestamo', 'idejemplar', 'id');
    }

    public function userPrestamo()
    {
        return $this->hasOne(UserPrestamo::class, 'idejemplar');
    }
    

}
