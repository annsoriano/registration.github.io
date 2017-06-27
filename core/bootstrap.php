<?php 

$app=[];

$app['config'] = require 'config.php';
require 'core/router.php';
require 'core/request.php';  
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';

$app['database'] = 	new queryBuilder(Connection::make($app['config']['database']));