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
                <img src="assets/img/logo.png" alt="logo" />
                <strong>ME</strong>LON
            </a>
            <!-- /logo -->

            <!-- Sidebar Toggler -->
            <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
                <i class="icon-reorder"></i>
            </a>
            <!-- /Sidebar Toggler -->

            <!-- Top Left Menu -->
            <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
                <li>
                    <a href="#">
                        Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <i class="icon-caret-down small"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> Example #1</a></li>
                        <li><a href="#"><i class="icon-calendar"></i> Example #2</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-tasks"></i> Example #3</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /Top Left Menu -->

            <!-- Top Right Menu -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-warning-sign"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li class="title">
                            <p>You have 5 new notifications</p>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                <span class="message">New user registration.</span>
                                <span class="time">1 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                                <span class="message">High CPU load on cluster #2.</span>
                                <span class="time">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                <span class="message">New user registration.</span>
                                <span class="time">10 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                <span class="message">New items are in queue.</span>
                                <span class="time">25 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="label label-warning"><i class="icon-bolt"></i></span>
                                <span class="message">Disk space to 85% full.</span>
                                <span class="time">55 mins</span>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View all notifications</a>
                        </li>
                    </ul>
                </li>

                <!-- Tasks -->
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li class="title">
                            <p>You have 7 pending tasks</p>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="task">
                                    <span class="desc">Preparing new release</span>
                                    <span class="percent">30%</span>
                                </span>
                                <div class="progress progress-small">
                                    <div style="width: 30%;" class="progress-bar progress-bar-info"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="task">
                                    <span class="desc">Change management</span>
                                    <span class="percent">80%</span>
                                </span>
                                <div class="progress progress-small progress-striped active">
                                    <div style="width: 80%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="task">
                                    <span class="desc">Mobile development</span>
                                    <span class="percent">60%</span>
                                </span>
                                <div class="progress progress-small">
                                    <div style="width: 60%;" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="task">
                                    <span class="desc">Database migration</span>
                                    <span class="percent">20%</span>
                                </span>
                                <div class="progress progress-small">
                                    <div style="width: 20%;" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View all tasks</a>
                        </li>
                    </ul>
                </li>

                <!-- Messages -->
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="badge">1</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li class="title">
                            <p>You have 3 new messages</p>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="photo"><img src="assets/img/demo/avatar-1.jpg" alt="" /></span>
                                <span class="subject">
                                    <span class="from">Bob Carter</span>
                                    <span class="time">Just Now</span>
                                </span>
                                <span class="text">
                                    Consetetur sadipscing elitr...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="photo"><img src="assets/img/demo/avatar-2.jpg" alt="" /></span>
                                <span class="subject">
                                    <span class="from">Jane Doe</span>
                                    <span class="time">45 mins</span>
                                </span>
                                <span class="text">
                                    Sed diam nonumy...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="photo"><img src="assets/img/demo/avatar-3.jpg" alt="" /></span>
                                <span class="subject">
                                    <span class="from">Patrick Nilson</span>
                                    <span class="time">6 hours</span>
                                </span>
                                <span class="text">
                                    No sea takimata sanctus...
                                </span>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View all messages</a>
                        </li>
                    </ul>
                </li>

                <!-- .row .row-bg Toggler -->
                <li>
                    <a href="#" class="dropdown-toggle row-bg-toggle">
                        <i class="icon-resize-vertical"></i>
                    </a>
                </li>

                <!-- Project Switcher Button -->
                <li class="dropdown">
                    <a href="#" class="project-switcher-btn dropdown-toggle">
                        <i class="icon-folder-open"></i>
                        <span>Projects</span>
                    </a>
                </li>

                <!-- User Login Dropdown -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
                        <i class="icon-male"></i>
                        <span class="username">John Doe</span>
                        <i class="icon-caret-down small"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- /user login dropdown -->
            </ul>
            <!-- /Top Right Menu -->
        </div>
        <!-- /top navigation bar -->

        <!--=== Project Switcher ===-->
        <div id="project-switcher" class="container project-switcher">
            <div id="scrollbar">
                <div class="handle"></div>
            </div>

            <div id="frame">
                <ul class="project-list">
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-desktop"></i></span>
                            <span class="title">Lorem ipsum dolor</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-compass"></i></span>
                            <span class="title">Dolor sit invidunt</span>
                        </a>
                    </li>
                    <li class="current">
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-male"></i></span>
                            <span class="title">Consetetur sadipscing elitr</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-thumbs-up"></i></span>
                            <span class="title">Sed diam nonumy</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-female"></i></span>
                            <span class="title">At vero eos et</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-beaker"></i></span>
                            <span class="title">Sed diam voluptua</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-desktop"></i></span>
                            <span class="title">Lorem ipsum dolor</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-compass"></i></span>
                            <span class="title">Dolor sit invidunt</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-male"></i></span>
                            <span class="title">Consetetur sadipscing elitr</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-thumbs-up"></i></span>
                            <span class="title">Sed diam nonumy</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-female"></i></span>
                            <span class="title">At vero eos et</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="image"><i class="icon-beaker"></i></span>
                            <span class="title">Sed diam voluptua</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- /#frame -->
        </div> <!-- /#project-switcher -->
    </header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!--=== Navigation ===-->
                                
                                <ul id="nav">
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/almacen"><i class="icon-group"></i>Almacen<i class="arrow icon-angle-left"></i></a>                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/banco"><i class="icon-group"></i>Banco<i class="arrow icon-angle-left"></i></a>                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/comprobante"><i class="icon-calendar"></i>Comprobante<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/descuento"><i class="icon-building"></i>Descuento<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/entrada"><i class="icon-user-md"></i>Entrada<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/estatus"><i class="icon-folder-open"></i>Estatus<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/familia"><i class="icon-male"></i>Familia<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/moneda"><i class="icon-globe"></i>Moneda<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/movContables"><i class="icon-mobile-phone"></i>Mov. Contables<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/producto"><i class="icon-thumbs-down"></i>Producto<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/salida"><i class="icon-suitcase"></i>Salida<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/stock"><i class="icon-folder-close"></i>Stock<i class="arrow icon-angle-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/tipoPago"><i class="icon-folder-close"></i>Tipo de Pago<i class="arrow icon-angle-left"></i></a>
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