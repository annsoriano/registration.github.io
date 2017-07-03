<?php


class FormsController{

	public function read(){

		return App::get('database')->select('userinfo');
	}

	public function insert(){
		Location::redirect(''. App::get('database')->insert(
			'userinfo', [
			'username'=>$_POST['username'],
			'pass'=>sha1($_POST['password']),
			'email'=>$_POST['email'],
			'first_name'=>$_POST['firstname'],
			'last_name'=>$_POST['lastname'],
			'gender'=>$_POST['gender'],
			'birthdate'=>$_POST['birthdate']
			]));
	}

	public function update(){
		Location::redirect(''.App::get('database')->update(
			'userinfo', [
			'username'=>$_POST['username'],
			'pass'=>sha1($_POST['password']),
			'email'=>$_POST['email'],
			'first_name'=>$_POST['firstname'],
			'last_name'=>$_POST['lastname'],
			'gender'=>$_POST['gender'],
			'birthdate'=>$_POST['birthdate']
			]));
	}

	public function delete(){
		Location::redirect(''.App::get('database')->delete(
			'userinfo', [
			'username'=>$_POST['username'],
			'pass'=>sha1($_POST['password'])
			]));
	}
}