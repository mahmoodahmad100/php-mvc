<?php 

class Home extends Controller
{
	public function index()
	{
		echo 'Home/index';
	}

	public function test($name = 'mahmood', $phone = '5')
	{
		echo $name.' - '.$phone;
	}
}

 ?>