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
<?php include "template/head.php"; ?>
<link href="css/pages/contacts.css" rel="stylesheet" type="text/css"/>
</head>
<body class="page-header-fixed">
<?php include "template/header.php"; ?>
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
            <div class="row page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>

					<li>
						<a href="#">Suppliers</a>
					</li>
				</ul>
			</div>
			<!--<h3 class="page-title">
			Customers
			</h3>-->
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row contacts">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 groups">
                	<h3>Groups</h3>
                    <ul class="scroller">
                    	<li>
                        	<a href="#" >Group 1</a>
                        </li>
                        <li>
                        	<a href="#" >Group 2</a>
                        </li>
                        <li>
                        	<a href="#" >Group 3</a>
                        </li>
                        <li>
                        	<a href="#" >Group 4</a>
                        </li>
                        <li>
                        	<a href="#" >Group 5</a>
                        </li>
                    </ul>
                    <div class="add">
                    <a href="#" class="btn btn-default btn-sm hline" ><i class="fa fa-plus"></i> Add Group</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 list">
                	<h3>Suppliers</h3>
                    <ul class="scroller">
                     <?php for($i=1; $i<15; $i++){ ?>
                    	<li>
                        	<a href="#" >Supplier <?php echo $i; ?> </a>
                        </li>
                      <?php } ?>
 
                    </ul>
                    <div class="add">
                    <a href="#" class="btn btn-default btn-sm hline" ><i class="fa fa-plus"></i>  Add Customer</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12 details">
                	<div class="panel">
                    	<div class="panel-heading clearfix">
                          <div class="pull-left">
                        	<button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button>
                          </div>
                          <div class="pull-right">
                          		<button class="btn btn-default btn-sm"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="panel-body">
                        	<h2>Alexandra Galton</h2>
                            <form action="" method="post" class="form form-horizontal" id="contact_form">
                            <div class="col-lg-12">
                            	<div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Name <span class="required">* </span></label>
                                        <div class="col-md-9">
                                        	<div class="input-icon right"><i class="fa"></i>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                            <!--<span class="help-block">A block of help text. </span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="ntn">NTN</label>
                                        <div class="col-md-9">
                                            <input type="text" name="ntn" id="ntn" class="form-control" placeholder="Enter NTN">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="strn">STRN</label>
                                        <div class="col-md-9">
                                            <input type="text" name="strn" id="strn" class="form-control" placeholder="Enter STRN">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="country" id="country">Country <span class="required">* </span></label>
                                        <div class="col-md-9">
                                        <div class="input-icon right"><i class="fa"></i>
                                            <select class="form-control select " name="country" id="country" data-live-search="true">
                                            	<option value="">Select Country</option>
                                                <option value="PK" >Pakistan</option>
                                                <option value="US" >United State</option>
                                                <option value="UK" >United Kingdom</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="city">City</label>
                                        <div class="col-md-9">
                                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="address">Address<span class="required">* </span></label>
                                        <div class="col-md-9">
                                        	<div class="input-icon right"><i class="fa"></i>
                                            <textarea name="address" id="address" class="form-control required" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="phone">Phone No.</label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                                            <!--<span class="help-block">A block of help text. </span>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mobile">Mobile No.</label>
                                        <div class="col-md-9">
                                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="fax">Fax No.</label>
                                        <div class="col-md-9">
                                            <input type="text" name="fax" id="fax" class="form-control" placeholder="Enter Fax">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="web">Web</label>
                                        <div class="col-md-9">
                                            <input type="url" name="web" id="web" class="form-control" placeholder="Enter Web">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">Email</label>
                                        <div class="col-md-9">
                                        	<div class="input-icon right"><i class="fa"></i>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="contact">Contact Person</label>
                                        <div class="col-md-9">
                                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Person">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="remarks">Remarks</label>
                                        <div class="col-md-9">
                                            <textarea name="remarks" id="remarks" class="form-control" placeholder="Enter Remarks"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-actions right">
									<button type="submit" class="btn blue">Save</button>
								</div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
			<!--/row-->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
<?php include "template/footer.php"; ?>
<script src="js/app.js" type="text/javascript"></script>
<script src="js/layout.js" type="text/javascript"></script>
<script src="js/pages/contacts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
});
</script>
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                 Widget settings form goes here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn blue">Save changes</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM--></body>

</html>