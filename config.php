<?php
define('URL', 'http://10.211.55.100');
define('UserAuth', 'test');
define('PasswordAuth', 'test');

$config = array(
	'username' => '',
	'password' => '',
	'dbname'   => 'blog',
	//'cn' 	   => sprintf('mongodb://%s:%d/%s', $hosts, $port,$database),
	'connection_string'=> 'mongodb://127.0.1.1:27001,127.0.1.1:27002,127.0.1.1:27003/?replicaSet=repl');
