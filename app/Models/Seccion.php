<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seccion
 *
 * @property $id
 * @property $nombre_grado
 * @property $grado
 * @property $seccion
 * @property $anioescolar_id
 *
 * @property Anioescolar $anioescolar
 * @property Signature[] $signatures
 * @property Student[] $students
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seccion extends Model
{
    
    static $rules = [
		'nombre_grado' => 'required',
		'grado' => 'required',
		'seccion' => 'required',
		'anioescolar_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_grado','grado','seccion','anioescolar_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function anioescolar()
    {
        return $this->hasOne('App\Models\Anioescolar', 'id', 'anioescolar_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function signatures()
    {
        return $this->hasMany('App\Models\Signature', 'seccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'seccion_id', 'id');
    }
    

}
