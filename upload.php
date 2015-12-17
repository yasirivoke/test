<?php
include "app.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/uniform/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->


<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="css/pages/error.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="images/favicon.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php /*
DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices 

 DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default 
 
 DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle 
 DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle 
 DOC: Apply "page-sidebar-hide" class to the body element to completely hide the sidebar on sidebar toggle 
 DOC: Apply "page-sidebar-fixed" class to have fixed sidebar 
 DOC: Apply "page-footer-fixed" class to the body element to have fixed footer 
 DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side 
 DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu 
 */?>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-hide page-full-width">


<?php //include "template/header.php"; ?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<?php //include "template/sidebar.php"; ?>

    <?php //include "template/quick-sidebar.php"; ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-30">
				
			</div>
			<!--/row-->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
 
<?php //include "template/footer.php"; ?>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/respond.min.js"></script>
<script src="assets/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/jquery.min.js" type="text/javascript"></script>
<script src="assets/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="js/app.js" type="text/javascript"></script>
<script src="js/layout.js" type="text/javascript"></script>
<script src="js/quick-sidebar.js" type="text/javascript"></script>
<script src="js/pages/index.js" type="text/javascript"></script>
<script src="js/pages/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Index.init();   
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>