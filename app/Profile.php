<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

   /**
    * one to one
    * one to many
    * many to many
    */
}
