<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
    	'decription',
    	'company_id',
    	'user_id',
    	'days',
    ];

        public function companies(){
        return $this->belongsTo('App\Models\Company');
    }

        public function user(){
        return $this->belongsToMany('App\Models\User');
    }
}
