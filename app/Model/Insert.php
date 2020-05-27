<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Insert extends Model
{
    protected $fillable=[
         'decision ','du','natDecision','consti','arti','considerant'
    ,'Am1','Am2','Am3','Am4','Am5','Am6', 'created_at', 'updated_at'
];
}
