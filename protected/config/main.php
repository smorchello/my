<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array (
		'basePath' => dirname ( __FILE__ ) . DIRECTORY_SEPARATOR . '..',
		'name' => 'Anastasia Bant',
		
		// preloading 'log' component
		'preload' => array (
				'log',
				'booster',
				'debug' 
		),
		
		// autoloading model and component classes
		'import' => array (
				'application.models.*',
				'application.components.*',
				// 'ext.booster.helpers.TbHtml',
				'ext.booster.widgets.*' 
		),
		
		'modules' => array (
				// uncomment the following to enable the Gii tool
				
				'gii' => array (
						'class' => 'system.gii.GiiModule',
						'password' => '12345',
						// If removed, Gii defaults to localhost only. Edit carefully to taste.
						'ipFilters' => array (
								'127.0.0.1',
								'::1' 
						) 
				) 
		),
		
		// application components
		'components' => array (
				
				'debug' => array (
						'class' => 'ext.yii2-debug-master.Yii2Debug' 
				),
				
				'user' => array (
						// enable cookie-based authentication
						'allowAutoLogin' => true,
						'class' => 'application.components.WebUser' 
				),
				// database settings are configured in database.php
				'db' => require (dirname ( __FILE__ ) . '/database.php'),
				// uncomment the following to enable URLs in path-format
				
				'urlManager' => array (
						// 'class' => 'application.components.CarUrlRule',
						
						'urlFormat' => 'path',
						'rules' => array (
								array (
										'class' => 'application.components.UrlRule' 
									// 'connectionID' => 'db',
								),
								'<controller:\w+>/<id:\d+>' => '<controller>/view>',
								'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
								'<controller:\w+>/<action:\w+>' => '<controller>/<action>' 
						
						),
						
						'showScriptName' => false 
				),
				
				'errorHandler' => array (
						// use 'site/error' action to display errors
						'errorAction' => YII_DEBUG ? null : 'site/error' 
				),
				
				'log' => array (
						'class' => 'CLogRouter',
						'routes' => array (
								array (
										'class' => 'CFileLogRoute',
										'levels' => 'error, warning' 
								) 
						) 
				),
				// 'class'=>'CProfileLogRoute',
				// 'levels'=>'profile',
				// 'enabled'=>true,
				
				// uncomment the following to show log messages on web pages
				/*
				 * array(
				 * 'class'=>'CWebLogRoute',
				 * ),
				 */
				
				'booster' => array (
						'class' => 'ext.booster.components.Booster' 
				),
				
				'assetManager' => array (
						'baseUrl' => '/assets',
						'linkAssets' => false,
						'basePath' => dirname ( __FILE__ ) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'assets' 
				) 
		),
		
		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params' => array (
				// this is used in contact page
				'adminEmail' => 'smart1991@mail.ru' 
		) 
);
