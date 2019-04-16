<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class WxtextModel extends Model
{
    protected $table='wxtext';
    public $timestamps=false;
    protected $primaryKey='tid';
}
