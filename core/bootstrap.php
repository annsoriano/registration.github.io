<?php 


App::bind('config', require 'config.php');


App::bind('database', new queryBuilder(
	Connection::make(App::get('config')['database'])

));

function view($name, $data=[]){

	extract($data);
	return require "views/{$name}.view.php";
}
class Location{
	function redirect($page){
		return header ("Location:/crud-mvc/{$page}");

	}
}
