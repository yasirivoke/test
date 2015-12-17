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
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/uniform/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/datepicker.min.css"/>
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/pages/invoice.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="images/favicon.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php /*
DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices 

 DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default 
 
 DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle 
 DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle 
 DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle 
 DOC: Apply "page-sidebar-fixed" class to have fixed sidebar 
 DOC: Apply "page-footer-fixed" class to the body element to have fixed footer 
 DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side 
 DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu 
 */?>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-menu-closed">
<?php include "template/header.php"; ?>
<div class="clearfix"> </div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  <?php include "template/sidebar.php"; ?>
  <?php include "template/quick-sidebar.php"; ?>
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content"> 
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body"> Widget settings form goes here </div>
            <div class="modal-footer">
              <button type="button" class="btn blue">Save changes</button>
              <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
      <!-- /.modal --> 
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM--> 
      
      <!-- BEGIN PAGE HEADER-->
      <div class="row page-bar">
        <ul class="page-breadcrumb">
          <li> <i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> </li>
          <li> <a href="#">Pages</a> <i class="fa fa-angle-right"></i> </li>
          <li> <a href="#">Blank</a> </li>
        </ul>
      </div>
      <!-- END PAGE HEADER--> 
      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="invoice">
          <div class="col-lg-12 margin-bottom-10 invoice-header">
            <div class="col-md-6"> <a  href="#" class="btn btn-primary btn-sm hline"><i class="fa fa-edit"></i> Edit</a> <a  href="#" class="btn btn-success btn-sm hline"><i class="fa fa-envelope-o"></i> Send</a> </div>
            <div class="col-md-6"> <a  href="#" class="btn btn-success btn-sm hline pull-right"><i class="fa fa-thumbs-up"></i> Finalize Invoice</a> </div>
          </div>
          <div class="col-lg-12">
            <div class="panel">
              <div class="panel-body invoice-body">
                  <div class="row info">
                  	<div class="col-lg-6">
                    	<img src="company/1/logo.jpg" />
                    </div>
                    <div class="col-lg-6">
                    	<table align="right" class="align-right">
                        	<thead>
                            	<tr>
                                	<th colspan="2"><h3>Invoice</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<th>Billing Date</th><td>15-10-2015</td>
                                </tr>
                                <tr>
                                    <th>Due Date</th><td>15-11-2015</td>
                                </tr>
                                <tr>
                                    <th>Reference</th><td>UBL-25846584</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="row info">
                  	<div class="col-sm-4">
                    	<h2>Our Information</h2>
                        <table class="align-right">
                        	<thead>
                            	<tr>
                                	<th colspan="2">Eccountant</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>Phone</td><td>+92-42-12345678</td>
                                </tr>
                                <tr>
                                    <td>Fax</td><td>+92-42-12345678</td>
                                </tr>
                                <tr>
                                    <td>Email</td><td>sales@domain.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                    	<h2>Billing To</h2>
                        <table class="align-right">
                        	<thead>
                            	<tr>
                                	<th colspan="2">Ivoke</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>Demo Customer</td>
                                </tr>
                                <tr>
                                    <td>123 Main Street</td>
                                </tr>
                                <tr>
                                    <td>Ashland, KY 41102</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                  <hr>
                  <div class="row info margin-bottom-15">
                  	<div class="col-lg-12">
                    	<div class="option"><span>Invoice #</span>IV-10025</div>
                        <div class="option"><span>Date</span>18-15-2015</div>
                        <div class="option"><span>Terms</span>On Recepit</div>
                        <div class="option"><span>Account #</span>C-12345</div>
                        <div class="option"><span>Due By #</span>25-10-2015</div>
                    	
                    </div>
                  </div>
                  <div class="row details">
                  	<div class="col-lg-12">
                    	<table class="table table-bordered">
                        	<thead>
                            	<tr>
                                	<th>Item Code</th><th>Description</th><th>QTY</th><th>UoM</th><th>Price/Unit</th><th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>SKU 1234</td><td>Test Product 1 - Description of test product 1</td><td>2</td><td>KG</td><td>100</td><td>200</td>
                                </tr>
                                <tr>
                                	<td>SKU 1234</td><td>Test Product 1 - Description of test product 1</td><td>2</td><td>KG</td><td>100</td><td>200</td>
                                </tr>
                                <tr>
                                	<td>SKU 1234</td><td>Test Product 1 - Description of test product 1</td><td>2</td><td>KG</td><td>100</td><td>200</td>
                                </tr>
                            </tbody>
                         </table>
                    </div>
                  </div>
                  <div class="row total-info margin-bottom-30">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 text-right">
                    	<table align="left" class="pull-right">
                            <tbody>
                            	<tr>
                                	<td>Subtotal</td><th width="160">600.00</th>
                                </tr>
                                <tr>
                                    <td>Discount</td><th>50</th>
                                </tr>
                                <tr>
                                    <td>Tax 20%</td><th>120</th>
                                </tr>
                                <tr>
                                    <td>Total</td><th>670.00</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="row invoice-footer">
                      <div class="col-lg-12">
                      	Desigend & Made by:<br>
                        <img src="images/logo.png" height="30"  >
                      </div>
                  </div>              

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-bottom-10"> </div>
      <!--/row--> 
      <!-- END PAGE CONTENT--> 
    </div>
  </div>
  <!-- END CONTENT --> 
  
</div>
<!-- END CONTAINER -->

<?php include "template/footer.php"; ?>

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
<script type="text/javascript" src="assets/bootstrap-datepicker/datepicker.min.js"></script> 
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/quick-sidebar.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   
   $('#date_btn').datepicker({
		format: "mm-yyyy",
    	viewMode: "months", 
    	minViewMode: "months"
	}).on('changeDate', function(ev){
			var monthNames = ["January","February","March","April","May","June","July","August","September","October","November","December"];
			d = new Date(ev.date);

			full_month = monthNames[d.getMonth()];
			Full_year = d.getFullYear();
			$("#date_btn .date").html(full_month +" "+Full_year);
			$('#date_btn').datepicker('hide');
			action = "<?php echo isset($_GET['list']) ? "&list=".$_GET['list']: '' ; ?>";
			dat = '01-'+(d.getMonth()+1)+'-'+ d.getFullYear()
			window.location= "?for="+dat+action;
		});
});
</script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>