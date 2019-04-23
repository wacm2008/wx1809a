<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class WxjssdkController extends Controller
{
    public function jssdk(){
        
        return view('weixin/jssdk');
    }
}
