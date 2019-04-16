<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class WxvoiceModel extends Model
{
    protected $table='wxvoice';
    public $timestamps=false;
    protected $primaryKey='vid';
}
