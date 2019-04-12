<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\UserModel;
use DB;
class UserController extends Controller
{
    public function test(){
		$data=UserModel::all()->toArray();
		print_r($data);
	}
}
