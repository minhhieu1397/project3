<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\UserInterface;
use App\Services\UserService;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userInterface;

    public function __construct(UserService $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    public function Login()
    {
    	return view('users.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('users.create');
        } else {
            return back()->withInput()->withErrors([
                'errorLogin' => 'Username or password incorrect'
            ]);
        }
    }

    public function Create()
    {
    	return view('users.sigup');
    }

    public function Store(CreateUserRequest $request)
    {
    	if ($this->userInterface->create($request)) {
            return back();
        } else {
            return back();
        }
    }
}
