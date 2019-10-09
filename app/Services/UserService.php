<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Services\Interfaces\UserInterface;
use App\Repositories\UserRepository;

class UserService implements UserInterface
{
	protected $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function create($request)
	{
		return $this->userRepository->create([
			'name' => ucwords(strtolower($request->input('name'))),
			'email' => $request->input('email'),
			'password' => \Hash::make($request->input('password')),
		]);
	}
}