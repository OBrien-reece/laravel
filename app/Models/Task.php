<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
    	'project_id',
    	'user_id',
    	'days',
    	'hours',
    	'company_id',
    ];


    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }


    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
