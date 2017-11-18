<?php 

class Home extends Controller
{
	public function index($username, $email, $password)
	{
		$user = $this->model('User');

		$user->create([
				'username' => $username,
				'email' => $email,
				'password' => $password
			]);

		$this->view('home/welcome',['username' => $username]);
	}
}

 ?>