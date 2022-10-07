<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anioescolar
 *
 * @property $id
 * @property $nombreanioescolar
 * @property $fechainicio
 * @property $fechafin
 * @property $liceo_id
 *
 * @property Crp[] $crps
 * @property Liceo $liceo
 * @property Seccion[] $seccions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Anioescolar extends Model
{
    
    static $rules = [
		'nombreanioescolar' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'liceo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreanioescolar','fechainicio','fechafin','liceo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function crps()
    {
        return $this->hasMany('App\Models\Crp', 'anioescolar_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function liceo()
    {
        return $this->hasOne('App\Models\Liceo', 'id', 'liceo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seccions()
    {
        return $this->hasMany('App\Models\Seccion', 'anioescolar_id', 'id');
    }
    

}
