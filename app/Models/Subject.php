<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=['name','section_id','image'];

    public function sections()
    {
        return $this->belongsTo('App\Models\Section');
    }
}
