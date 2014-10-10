<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>

            <!--=== CSS ===-->

            <!-- Bootstrap -->
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/bootstrap/css/bootstrap.min.css'); ?>

            <!-- jQuery UI -->
            <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
            <!--[if lt IE 9]>
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
            <![endif]-->

            <!-- Theme -->
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/main.css'); ?>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/plugins.css'); ?>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/responsive.css'); ?>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/icons.css'); ?>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/fontawesome/font-awesome.min.css'); ?>
            
            <!--[if IE 7]>
                    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/fontawesome/font-awesome-ie7.min.css">
            <![endif]-->

            <!--[if IE 8]>
                    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/ie8.css" rel="stylesheet" type="text/css" />
            <![endif]-->
                        
            <?php Yii::app()->clientScript->registerCssFile('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'); ?>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/custom/main.css'); ?> 
    </head>

    <body>
	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo_stat.png" alt="logo" />
			</a>
			<!-- /logo -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
                            <i class="icon-male"></i>
                            <span class="username"><?php echo Yii::app()->user->name ?></span>
                            <i class="icon-caret-down small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-user"></i> My profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-key"></i> Logout </a></li>
                        </ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!--=== Navigation ===-->
                                
                                <ul id="nav">
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/users"><i class="icon-group"></i>Users<i class="arrow icon-angle-left"></i></a>                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/roles"><i class="icon-group"></i>Roles<i class="arrow icon-angle-left"></i></a>                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/appointment"><i class="icon-calendar"></i>Appointments<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/institution"><i class="icon-building"></i>Institution<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/insurance"><i class="icon-user-md"></i>Insurance<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/interpreter"><i class="icon-folder-open"></i>Interpreter<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/job"><i class="icon-male"></i>Job<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/language"><i class="icon-globe"></i>Languages<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/media"><i class="icon-mobile-phone"></i>Media<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection"><i class="icon-thumbs-down"></i>Reason of Rejection<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/specialty"><i class="icon-suitcase"></i>Speciality<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/CatalogSystem"><i class="icon-folder-close"></i>System Catalog<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                </ul>
			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<?php echo $content; ?>
			</div>
			<!-- /.container -->

		</div>
	</div>
                
        <!--=== JavaScript ===-->
        
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/jquery-1.10.2.min.js',CClientScript::POS_HEAD); ?>
        
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/bootstrap/js/bootstrap.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
        
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
        
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        
        <!-- Slim Progress Bars -->
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/libs/lodash.compat.min.js',CClientScript::POS_END); ?>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/nprogress/nprogress.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	
        <!-- Noty -->
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/noty/jquery.noty.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/noty/layouts/center.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/noty/themes/default.js',CClientScript::POS_END); ?>
                
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/main.js',CClientScript::POS_END); ?>

	<!-- App -->
        
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/app.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/plugins.js',CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/plugins.form-components.js',CClientScript::POS_END); ?>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>
    </body>
</html>