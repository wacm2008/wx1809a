<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class WxfotoModel extends Model
{
    protected $table='wxfoto';
    public $timestamps=false;
    protected $primaryKey='fid';
}
