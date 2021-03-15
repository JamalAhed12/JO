<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseContainer extends Model
{
    protected $fillable=['name','image','education_level_id','section_id','subject_id','user_id'];


    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    public function education_level()
    {
        return $this->belongsTo('App\Models\EducationLevel');
    }
   
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }


}
