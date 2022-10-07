<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificacion
 *
 * @property $id
 * @property $momento1
 * @property $momento2
 * @property $momento3
 * @property $definitiva
 * @property $student_id
 * @property $signature_id
 *
 * @property Signature $signature
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calificacion extends Model
{
    
    static $rules = [
		'student_id' => 'required',
		'signature_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['momento1','momento2','momento3','definitiva','student_id','signature_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function signature()
    {
        return $this->hasOne('App\Models\Signature', 'id', 'signature_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    

}
