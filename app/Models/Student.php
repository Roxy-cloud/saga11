<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $cedula
 * @property $apellidos
 * @property $nombres
 * @property $lugarnac
 * @property $estadonac
 * @property $fechanac
 * @property $sexo
 * @property $seccion_id
 * @property $crp_id
 *
 * @property Calificacion[] $calificacions
 * @property Crpcalif[] $crpcalifs
 * @property Crp $crp
 * @property Seccion $seccion
 * @property StudentSignature[] $studentSignatures
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'apellidos' => 'required',
		'nombres' => 'required',
		'lugarnac' => 'required',
		'estadonac' => 'required',
		'fechanac' => 'required',
		'sexo' => 'required',
		'seccion_id' => 'required',
		'crp_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','apellidos','nombres','lugarnac','estadonac','fechanac','sexo','seccion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacions()
    {
        return $this->hasMany('App\Models\Calificacion', 'student_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function crpcalifs()
    {
        return $this->hasMany('App\Models\Crpcalif', 'student_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function crp()
    {
        return $this->hasOne('App\Models\Crp', 'id', 'crp_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seccion()
    {
        return $this->hasOne('App\Models\Seccion', 'id', 'seccion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function signature()
    {
        return $this->belongsToMany('App\Models\StudentSignature')->withPivot('student_id','signature_id');
    }
    

}
