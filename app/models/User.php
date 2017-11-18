<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

Class User extends Eloquent
{
	protected $table = 'users';
	public $timestamps = false;
	protected $fillable = ['username', 'email', 'password'];
}


 ?>