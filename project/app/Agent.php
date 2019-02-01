<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'agents';
     protected $primaryKey = 'agent_id';
   
    protected $fillable = [

        'agent_name', 'agent_contact', 'agent_type', 'agent_address', 
    ];
}
