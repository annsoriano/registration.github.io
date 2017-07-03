<?php 

 class PagesController{

 	public static function index(){

		return view('index', []);
 	}

 	public static function read(){

		return view('read',['data'=>App::get('database')->select('userinfo')]);
 	}

 	public static function update(){

		return view('update',[]);
	}

 	public static function delete(){

		return view('delete',[]);
 	}

 }


 ?>