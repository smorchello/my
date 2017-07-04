<?php

// This is the database connection configuration.
return array (
		// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// uncomment the following lines to use a MySQL database
		'class' => 'CDbConnection',
		'connectionString' => 'mysql:host=localhost;dbname=foot',
		'emulatePrepare' => true,
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8' ,
		'tablePrefix' => 'app_',
		'enableProfiling' => true,
		'enableParamLogging' => true,
	// включаем профайлер
	// 'enableProfiling'=>true,
	// показываем значения параметров
	// 'enableParamLogging' => true,
);