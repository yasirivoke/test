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
<body class="page-header-fixed ">
<?php include "template/header.php"; ?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <div class="page-content page-content-full">
      
        <!-- BEGIN PAGE HEADER-->
        <div class="row page-bar">
          <ul class="page-breadcrumb">
            <li> <i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> </li>
            <li> <a href="#">Customers</a> </li>
          </ul>
        </div>
        <div class="full-wrapper"> 
        <!-- END PAGE HEADER--> 
        <!-- BEGIN PAGE CONTENT-->
        
        <section class="con_wrapper row contacts">
            <div class="col col-lg-2 col-md-2 col-sm-3 col-xs-12 groups">
              <div class="col-box clearfix">
                <div class="search">
                    <input type="text" class="form-control" id="grfilter" placeholder="Search Group" ng-model="query" aria-invalid="false" style="">
                    <i class="icon-magnifier"></i>
                </div>
                <div class="col-row">
                  <div class="col-cel scrollable">
                    <div class="cell-inner nicescroll" >
                      <!--<h3>Groups</h3>-->
                      <ul id="grlist">
                        <li> <a href="#" >Group 1</a> </li>
                        <li class="active"> <a href="#" >Group 2</a> </li>
                        <li> <a href="#" >Auto Mobile</a> </li>
                        <li> <a href="#" >Hardware</a> </li>
                        <li> <a href="#" >Computer</a> </li>
                        <li> <a href="#" >Social Media</a> </li>
                        <li> <a href="#" >Web</a> </li>
                        <li> <a href="#" >Marketing</a> </li>
                        <li> <a href="#" >Advertisment</a> </li>
                        <li> <a href="#" >Group 3</a> </li>
                        <li> <a href="#" >Group 4</a> </li>
                        <li> <a href="#" >Group 5</a> </li>
                        <li> <a href="#" >All Contacts</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="add"> <a href="#" class="btn btn-default btn-sm" ><i class="fa fa-plus"></i> Add Group</a> </div>
              </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-12 list">
              <div class="col-box clearfix">
                <div class="search">
                    <input type="text" class="form-control" id="listfilter" placeholder="Search Contacts" ng-model="query" aria-invalid="false" style="">
                    <i class="icon-magnifier"></i>
                </div>
                <div class="col-row">
                  <div class="col-cel">
                  <div class="cell-inner nicescroll">
                    <ul id="list">
                    	<li> <a href="#" >Ahmad Ali</a> <span class="del"><i class="fa fa-times"></i></span></li>
                        <li> <a href="#" >Tahir Ahmad</a> <span class="del"><i class="fa fa-times"></i></span></li>
                        <li> <a href="#" >Haider Ali</a> <span class="del"><i class="fa fa-times"></i></span></li>
                        <li> <a href="#" >Nasir Ahmad</a> <span class="del"><i class="fa fa-times"></i></span></li>
                      <?php 
						 $x =rand(1,10);
						 for($i=1; $i<15; $i++){ ?>
                      <li class="<?php echo $i == $x ? 'active':''; ?>"> <a href="#" >Customer <?php echo $i; ?> </a> </li>
                      <?php } ?>
                    </ul>
                    </div>
                  </div>
                </div>
                <div class="add"> <a href="#" class="btn btn-default btn-sm"ss ><i class="fa fa-plus"></i> Add Customer</a> </div>
              </div>
            </div>
            <div class="col col-md-8 col-sm-6 col-xs-12 details">
                <div class="col-box clearfix">
              <div class="cell-inner nicescroll">
                        
                        <form action="" method="post" class="form form-horizontal" id="contact_form">
                          <div class="col-lg-12 clearfix">
                          <h2>Alexandra Galton</h2>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="name">Name <span class="required">* </span></label>
                                <div class="col-lg-9">
                                  <div class="input-icon right"><i class="fa"></i>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                    <!--<span class="help-block">A block of help text. </span>--> 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="ntn">NTN</label>
                                <div class="col-lg-9">
                                  <input type="text" name="ntn" id="ntn" class="form-control" placeholder="Enter NTN">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="strn">STRN</label>
                                <div class="col-lg-9">
                                  <input type="text" name="strn" id="strn" class="form-control" placeholder="Enter STRN">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="country" id="country">Country <span class="required">* </span></label>
                                <div class="col-lg-9">
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
                                <label class="col-lg-3 control-label" for="city">City</label>
                                <div class="col-lg-9">
                                  <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="address">Address<span class="required">* </span></label>
                                <div class="col-md-9">
                                  <div class="input-icon right"><i class="fa"></i>
                                    <textarea name="address" id="address" class="form-control required" placeholder="Enter Address"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="phone">Phone No.</label>
                                <div class="col-lg-9">
                                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                                  <!--<span class="help-block">A block of help text. </span>--> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="mobile">Mobile No.</label>
                                <div class="col-lg-9">
                                  <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="fax">Fax No.</label>
                                <div class="col-lg-9">
                                  <input type="text" name="fax" id="fax" class="form-control" placeholder="Enter Fax">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="web">Web</label>
                                <div class="col-lg-9">
                                  <input type="url" name="web" id="web" class="form-control" placeholder="Enter Web">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="email">Email</label>
                                <div class="col-lg-9">
                                  <div class="input-icon right"><i class="fa"></i>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="contact">Contact Person</label>
                                <div class="col-lg-9">
                                  <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Person">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label" for="remarks">Remarks</label>
                                <div class="col-lg-9">
                                  <textarea name="remarks" id="remarks" class="form-control" placeholder="Enter Remarks"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-actions right">
                              <button type="button" class="btn blue hline"><i class="fa fa-times"></i> Cancel</button>
                              <button type="submit" class="btn blue hline"><i class="fa fa-save"></i> Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
               </div>
            </div>
        </section>
        </div>
        <!-- END PAGE CONTENT--> 
      </div>
    </div>
    <!-- END CONTENT --> 
    
  </div>
  <!-- END CONTAINER -->
  
  <?php include "template/footer.php"; ?>
  <script src="assets/list-filter.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/pages/contacts.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 

<script src="js/common.js" type="text/javascript"></script> 
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout

   $('#grfilter').treeListFilter('#grlist', 0);
   $('#listfilter').treeListFilter('#list', 0);
});
</script> 

<!-- MODAL FORM-->
<div class="modal fade" id="ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  </div>
</div>
</body>

</html>