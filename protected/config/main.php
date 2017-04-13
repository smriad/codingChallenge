<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
error_reporting(0);
@ini_set('Display_errors', 0);
//@ini_set('memory_limit', '-1');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'theme'=>'shadow_dancer',
	'name'=>'codingChalenge',
    'defaultController' => 'purchases/admin',

	// preloading 'log' component
	'preload'=>array('log','input','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
    'application.models.*',
	'application.components.*',
    'application.modules.user.models.*',
    'application.modules.user.components.*',
	'application.extensions.EchMultiSelect.*',
            'application.extensions.EHttpClient.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
		 'generatorPaths' => array(
          'bootstrap.gii'
       ),
			'class'=>'system.gii.GiiModule',
			'password'=>'pass123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),*/
		
		 'user'=>array(
            # encrypting method (php hash function)

            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
 
            # automatically login from registration
            'autoLogin' => true,
 
            # registration path
            'registrationUrl' => array('/user/registration'),
 
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
		
	),

	// application components
	'components'=>array(

/*        'request'=>array(
            'enableCsrfValidation'=>false,
        ),*/
		
	'bootstrap' => array(
	    'class' => 'ext.bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
	),

        'input'=>array(
            'class'         => 'CmsInput',
            'cleanPost'     => true,
            'cleanGet'      => true,
        ),
		
		
		'user'=>array(
            // enable cookie-based authentication
            'class' => 'WebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
        ),

        'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts'
        ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=codingchallenge',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '1234',
			'charset' => 'utf8',
            'tablePrefix'=>'tbl_',
            'enableParamLogging'=>true,
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		
		  'assetManager' => array(
            'linkAssets' => true,
        ),


		/* 'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),*/

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'smriad@gmail.com',
	),
);
