<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable=['name','education_level_id','slug','active'];

    public function education_level()
    {
        return $this->belongsTo('App\Models\EducationLevel');
    }
}
