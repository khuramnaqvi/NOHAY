<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nohay extends Model
{
    use HasFactory;
    public function campanyname()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
