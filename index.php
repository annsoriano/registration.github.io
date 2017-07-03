<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php'; 


router::load('routes.php')
	->direct(Request::uri(), Request::method());


 ?>