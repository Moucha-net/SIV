<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'defaultController'=>'site',
        'name'=>'STAT',
	'theme'=>'melon2',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
            'application.models.*',
            'application.views.*',
            'application.components.*',
            'application.extensions.yii-mail.*'
	),

	'modules'=>array(
            // uncomment the following to enable the Gii tool

            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'12345Ab...',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters'=>array('127.0.0.1','::1'),
            ),
		
	),

	// application components
	'components'=>array(
            'mail' => array(
                'class' => 'ext.yii-mail.YiiMail',
                'transportType' => 'smtp',
                'transportOptions' => array(
                    'host' => 'mail.statinterpreters.com',
                    'username' => 'syst@statinterpreters.com',
                    'password' => 'Statsys1!',
                    'port' => '587',
                    //'encryption'=>'tls',
                ),
                'viewPath' => 'application.views.mail',
                'logging' => true,
                'dryRun' => false
            ),
            'user'=>array(
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
            ),
            'request'=>array(
                'enableCsrfValidation'=>false,
            ),
            'session' => array(
                'cookieMode' => 'only',
                'sessionName' => 'SessionSTAT',
                'timeout' => 200,
            ),
            
            /*'authManager'=>array(
                'class'=>'CDbAuthManager',
                'connectionID'=>'db',
            ),*/
            // uncomment the following to enable URLs in path-format

            'urlManager'=>array(
                'urlFormat'=>'path',
                'showScriptName'=>false,
                //'urlSuffix'=>'.aspx',
                'rules'=>array(
                    '<controller:\w+>/<id:\id:\d+>'=>'<controller>/view',
                    //'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>'=>'<controller>/<action>',
                    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                ),
            ),
		
            /*'db'=>array(
                'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
            ),
            // uncomment the following to use a MySQL database
            */
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=db_stat_test',
                'emulatePrepare' => true,
                'username' => 'db_stat_test',
                'password' => '12345Ab...',
                'charset' => 'utf8',
                ),
		
		'errorHandler'=>array(
                    // use 'site/error' action to display errors
                    'errorAction'=>'site/error',
		),
		'log'=>array(
                    'class'=>'CLogRouter',
                    'routes'=>array(
                        array(
                                'class'=>'CFileLogRoute',
                                'levels'=>'error, warning',
                        ),
                        // uncomment the following to show log messages on web pages
                        /*
                        array(
                                'class'=>'CWebLogRoute',
                        ),
                        */
                    ),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
            // this is used in contact page
            'adminEmail'=>'syst@statinterpreters.com',
	),
);