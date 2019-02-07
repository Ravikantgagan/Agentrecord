<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends  Authenticatable
{
	  // use Notifiable;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     use SoftDeletes;
     protected $table = 'agents';
     protected $primaryKey = 'agent_id';
    
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'agent_email', 'agent_password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'agent_password', 
    ];
    
}
