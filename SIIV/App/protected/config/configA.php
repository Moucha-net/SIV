<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$configA = array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'STAT',
	'theme'=>'melon',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.cruge.components.*',
        'application.modules.cruge.extensions.crugemailer.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345Ab...',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

		'cruge'=>array(
            'tableprefix'=>'cruge_',
            'availableAuthMethods'=>array('default'),
            'availableAuthModes'=>array('email'),
        	'baseUrl'=>'http://coco.com/',

             // NO OLVIDES PONER EN FALSE TRAS INSTALAR
             'debug'=>true,
             'rbacSetupEnabled'=>true,
             'allowUserAlways'=>true,

            // MIENTRAS INSTALAS..PONLO EN: false
            'useEncryptedPassword' => true,
            'hash'=> 'md5',    

            'afterLoginUrl'=>array('/'),
			'afterLogoutUrl'=>array('/cruge/ui/login'),
			'afterSessionExpiredUrl'=>array('/cruge/ui/login'),

            // manejo del layout con cruge.
            // 
            'loginLayout'=>'//layouts/main',
            'registrationLayout'=>'//layouts/main',
            'activateAccountLayout'=>'//layouts/main',
            'editProfileLayout'=>'//layouts/main',
            // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout 
            // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge 
            // requerirá de un portlet para desplegar un menu con las opciones de administrador.
            // 
            'generalUserManagementLayout'=>'//layouts/main', 
        ),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
            'allowAutoLogin'=>true,
            'class' => 'application.modules.cruge.components.CrugeWebUser',
            'loginUrl' => array('/cruge/ui/login'),
        ),
        'authManager' => array(
            'class' => 'application.modules.cruge.components.CrugeAuthManager',
        ),
        'crugemailer'=>array(
            'class' => 'application.components.StatCrugeMailer',
            'mailfrom' => 'info@stat.com',
            'subjectprefix' => 'Tu Aplicacion',
            'bcc'=>'jagorax@gmail.com',
            'smtp_user' => 'jagorax@gmail.com',
            'smtp_pwd' => 'Lezjonneith7985',
        ),
        'format' => array(
            'datetimeFormat'=>"d M, Y h:m:s a",
        ),
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
            //'urlSuffix'=>'.aspx',
			'rules'=>array(
				//'<controller:\w+>/<id:\id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
               '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
			),
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=db_stat',
			'emulatePrepare' => true,
			'username' => 'db_stat',
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
		            'levels'=>'trace, info, error, warning, vardump',
		        ),
		        array(
		            'class'=>'CWebLogRoute',
		                                'enabled' => YII_DEBUG,
		            'levels'=>'error, warning, log, vardump',
		            //'showInFireBug'=>true,
		        ),
		    ),
		), 
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'yo@cesarcancino.com',
		'server'=>'localhost',
	),
);

?>