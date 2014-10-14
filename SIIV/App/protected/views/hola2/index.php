<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/fullcalendar/fullcalendar.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/demo/pages_calendar.js',CClientScript::POS_END); ?>

<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index">Dashboard</a>
		</li>
		<li class="current">
			<a href="#" title="">Calendar</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<!--=== Page Content ===-->
<div class="row">
        <!--=== Form Wizard ===-->
        <div class="col-md-12">
                <div class="widget box">
                        <div class="widget-header">
                                <h4><i class="icon-calendar"></i> Calendar</h4>
                        </div>
                        <div class="widget-content">
                                <div id="calendar"></div>
                        </div>
                </div>
                <!-- /Form Wizard -->
        </div>
<!-- /Page Content -->
</div>