<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crpcalif
 *
 * @property $id
 * @property $momento1
 * @property $momento2
 * @property $momento3
 * @property $definitiva
 * @property $student_id
 * @property $crp_id
 * @property $user_id
 *
 * @property Crp $crp
 * @property Student $student
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crpcalif extends Model
{
    
    static $rules = [
		'student_id' => 'required',
		'crp_id' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['momento1','momento2','momento3','definitiva','student_id','crp_id','user_id'];


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
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
