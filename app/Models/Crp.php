<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crp
 *
 * @property $id
 * @property $nombre_crp
 * @property $users_id
 * @property $anioescolar_id
 *
 * @property Anioescolar $anioescolar
 * @property Crpcalif[] $crpcalifs
 * @property Student[] $students
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crp extends Model
{
    
    static $rules = [
		'nombre_crp' => 'required',
		'users_id' => 'required',
		'anioescolar_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_crp','users_id','anioescolar_id'];


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
    public function crpcalifs()
    {
        return $this->hasMany('App\Models\Crpcalif', 'crp_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'crp_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}
