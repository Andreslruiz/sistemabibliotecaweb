<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $paginas
 * @property $codigo
 * @property $libro
 * @property $isbn
 * @property $editorial
 * @property $autor
 * @property $ejemplar
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'paginas' => 'required',
		'codigo' => 'required',
		'libro' => 'required',
		'isbn' => 'required',
		'editorial' => 'required',
		'autor' => 'required',
		'ejemplar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paginas','codigo','libro','isbn','editorial','autor','ejemplar'];



}
