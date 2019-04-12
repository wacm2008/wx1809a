<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    public function aaa(){
		/*echo __METHOD__;*/
		$key='tmp:aaa';
		/*$val='aaa';
		$res=Redis::set($key,$val);
		var_dump($res);*/
		$v= Redis::get($key);
		echo "v:".$v;
	}
}
