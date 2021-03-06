<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
        $users = User::all();

        return view('admin.user.index', array('users' => $users));
	}

}
