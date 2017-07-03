<?php
/*
$router->define([
	'crud-mvc'=>'controllers/index.php',
	'crud-mvc/read'=>'controllers/read.php',
	'crud-mvc/update'=>'controllers/update.php',
	'crud-mvc/delete'=>'controllers/delete.php'

]);
*/
$router->get('crud-mvc','PagesController@index');
$router->get('crud-mvc/update','PagesController@update');
$router->get('crud-mvc/delete','PagesController@delete');
$router->get('crud-mvc/read','PagesController@read');

$router->post('crud-mvc', 'FormsController@insert');
$router->post('crud-mvc/update', 'FormsController@update');
$router->post('crud-mvc/delete', 'FormsController@delete');
$router->post('crud-mvc/read', 'FormsController@read');
