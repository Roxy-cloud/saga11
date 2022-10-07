<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Signature
 *
 * @property $id
 * @property $nombre
 * @property $abreviatura
 * @property $seccion_id
 * @property $user_id
 *
 * @property Calificacion[] $calificacions
 * @property Seccion $seccion
 * @property StudentSignature[] $studentSignatures
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Signature extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'abreviatura' => 'required',
		'seccion_id' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','abreviatura','seccion_id','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacions()
    {
        return $this->hasMany('App\Models\Calificacion', 'signature_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seccion()
    {
        return $this->hasOne('App\Models\Seccion', 'id', 'seccion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function student()
    {
        return $this->belongsToMany('App\Models\StudentSignature')->withPivot('student_id','signature_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
