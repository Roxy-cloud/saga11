<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Liceo
 *
 * @property $id
 * @property $codigoplantel
 * @property $nombre
 * @property $direccion
 * @property $telefono
 * @property $municipio
 * @property $distritofederal
 * @property $zonaeducativa
 * @property $director
 * @property $ceduladirector
 *
 * @property Anioescolar[] $anioescolars
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Liceo extends Model
{
    
    static $rules = [
		'codigoplantel' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'municipio' => 'required',
		'distritofederal' => 'required',
		'zonaeducativa' => 'required',
		'director' => 'required',
		'ceduladirector' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoplantel','nombre','direccion','telefono','municipio','distritofederal','zonaeducativa','director','ceduladirector'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function anioescolars()
    {
        return $this->hasMany('App\Models\Anioescolar', 'liceo_id', 'id');
    }
    

}
