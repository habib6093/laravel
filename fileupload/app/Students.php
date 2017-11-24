<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table="student";
    protected $primaryKey="student_id";

    protected $fillable=['name','varsity_id','email','password','check'];
    
    public function setPasswordAttribute($temp)
    {
    	$this->attributes['password']=bcrypt($temp);
    }

}
