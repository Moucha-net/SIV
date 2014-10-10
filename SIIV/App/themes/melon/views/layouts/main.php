<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <!--=== CSS ===-->

  <!-- Bootstrap -->
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- jQuery UI -->
  <!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
  <![endif]-->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/main.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/fontawesome/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/fontawesome/font-awesome.min.css">
  <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
  <![endif]-->

  <!--[if IE 8]>
    <link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/buttons.css"/>

  <!--=== JavaScript ===-->

  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/libs/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/libs/lodash.compat.min.js"></script>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="assets/js/libs/html5shiv.js"></script>
  <![endif]-->

  <!-- Smartphone Touch Events -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/event.swipe/jquery.event.move.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/event.swipe/jquery.event.swipe.js"></script>

  <!-- General -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/libs/breakpoints.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/cookie/jquery.cookie.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>


<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/sparkline/jquery.sparkline.min.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/blockui/jquery.blockUI.min.js"></script>

  <!-- Pickers -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/pickadate/picker.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/pickadate/picker.date.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/pickadate/picker.time.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

  <!-- Page specific plugins -->
  <!-- Charts -->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flot/jquery.flot.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flot/jquery.flot.tooltip.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flot/jquery.flot.resize.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flot/jquery.flot.growraf.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/blockui/jquery.blockUI.min.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- Noty -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/noty/jquery.noty.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/noty/layouts/center.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/noty/themes/default.js"></script>

<!-- Forms -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/uniform/jquery.uniform.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/fileinput/fileinput.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/duallistbox/jquery.duallistbox.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-inputmask/jquery.inputmask.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-wysihtml5/wysihtml5.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.js"></script>


  <!-- Forms -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/typeahead/typeahead.min.js"></script> <!-- AutoComplete -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/autosize/jquery.autosize.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/inputlimiter/jquery.inputlimiter.min.js"></script>
 

  <!-- Form Wizard -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

  <!-- App -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/app.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins.form-components.js"></script>
<!-- Bootbox -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootbox/bootbox.js"></script>

  <!-- DataTables -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/DT_bootstrap.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
  
<!-- Theme -->
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/main.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
  
  
  <script>
  $(document).ready(function(){
    "use strict";

    App.init(); // Init layout and core plugins
    Plugins.init(); // Init all plugins
    FormComponents.init(); // Init all form-specific plugins
  });

  $(function () {
    $("#datepicker").datepicker("option", "dateFormat", "yy-mm-dd");
    $("#datepicker2").datepicker("option", "dateFormat", "yy-mm-dd");
  });
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  <!-- Demo JS -->
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demo/pages_calendar.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demo/charts/chart_filled_blue.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demo/charts/chart_simple.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demo/google_maps.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demo/form_wizard.js"></script>

   <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery.noty.packaged.min.js"></script>
  
      <script type="text/javascript">

    function notyBasico(type,text,layout) {
        
          var n = noty({
              text        : '<div id="cabeceraNoty" style="width: 100%; margin: 0px auto 0px auto; background-color: #FFF; overflow: hidden;"><div style="float: left; width: 90%; font: 10pt Verdana; text-align: center;">Alerta</div><div id="notyCloseButton" style="margin: 0px 0px 0px 2px; text-align: right;">X</div></div><div style="margin: 0px 0 0 0; padding: 0 0 0 0px; text-align:center; clear: both;">'+text+'</div>',
              type        : type,
              dismissQueue: true,
              modal       : true,
              layout      : layout,
              theme       : 'defaultTheme',
              maxVisible  : 10,
              callback : {
                afterShow : function () {
                  $('#notyCloseButton').one('click', function() {
                    //alert("You closed the noty");
                  });
                }
              },
          });
        
        console.log('html: ' + n.options.id);
    }

    function notyBoton(type,text,layout)
    {

      var n = noty({
            text        : text,
            type        : type,
            dismissQueue: true,
            modal       : true,
            layout      : layout,
            theme       : 'defaultTheme',
            maxVisible  : 10,
            buttons     : [
                {addClass: 'btn btn-primary', text: 'Ok', onClick: function ($noty) {
                    $noty.close();
                    noty({dismissQueue: true, force: true, layout: layout, theme: 'defaultTheme', text: 'You clicked "Ok" button', type: 'success'});
                }
                },
                {addClass: 'btn btn-danger', text: 'Cancel', onClick: function ($noty) {
                    $noty.close();
                    noty({dismissQueue: true, force: true, layout: layout, theme: 'defaultTheme', text: 'You clicked "Cancel" button', type: 'error'});
                }
                }
            ],
          }); 
    }

</script>

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
                <a class="navbar-brand" href="#">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo_stat.png" alt="logo" />
                </a>
                <!-- /logo -->

                <!-- Sidebar Toggler -->
                <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
                    <i class="icon-reorder"></i>
                </a>
                <!-- /Sidebar Toggler -->

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
                            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cruge/ui/usermanagementupdateMe/id/<?php echo Yii::app()->user->id ?>"><i class="icon-user"></i> My profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo Yii::app()->user->ui->logoutUrl?>"><i class="icon-key"></i> Logout </a></li>
                        </ul>
                    </li>
                    <!-- /user login dropdown -->
                </ul>
                <!-- /Top Right Menu -->
            </div>
            <!-- /top navigation bar -->

        </header> <!-- /.header -->

        <div class="fixed-header" id="container">
            <div id="sidebar" class="sidebar-fixed">
                <div id="sidebar-content">

                    <!-- Search Input -->
                    <!--<form class="sidebar-search">
                        <div class="input-box">
                            <button type="submit" class="submit">
                                <i class="icon-search"></i>
                            </button>
                            <span>
                                <input type="text" placeholder="Search...">
                            </span>
                        </div>
                    </form>-->

                    <!--=== Navigation ===-->
                  <?php 
                  $this->widget('zii.widgets.CMenu',array(
                    'id'=>'nav',
                    'encodeLabel'=>false,
                    'items'=>Yii::app()->user->rbac->getMenu(),
                    'submenuHtmlOptions' => array('class'=>'sub-menu'),
                    'activateParents'=>true
                  )); ?>

                </div>
                <div id="divider" class="resizeable"></div>
            </div>
            <div id="content">
                <div class="container">
                    <!-- /Sidebar -->
                    <?php echo $content; ?>
                </div>
            </div>
        </div> <!-- /container -->
        <!-- DataTables -->

       
    </body>
</html>