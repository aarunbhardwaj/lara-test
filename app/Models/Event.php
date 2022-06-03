<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany("App\Models\Workshop", "event_id", "id");
    }
    public function futureevents(){
       return $this->where('start','=>', date('Y-m-d'));
    }
 
}
