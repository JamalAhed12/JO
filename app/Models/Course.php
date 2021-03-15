<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable=['name','image','price','ends_at','active','course_container_id'];

    public function container()
    {
        return $this->belongsTo('App\Models\CourseContainer', 'course_container_id');
    }
}
