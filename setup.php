<?php
include "app.php";
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<?php include "template/head.php"; ?>
</head>
<body class="page-header-fixed">
<?php include "template/header.php"; ?>
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content"> 
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
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
      <h3 class="page-title"> Blank Page <small>blank page</small> </h3>
      
      <!-- END PAGE HEADER--> 
      <!-- BEGIN PAGE CONTENT-->
      <div class="row margin-bottom-30 form" id="form_wizard">
            <form action="#" class="form-horizontal" id="submit_form" method="POST">
        <div class="form-wizard">
          <div class="form-body">
            <ul class="nav steps">
              <li> <a href="#tab1" data-toggle="tab" class="step"> <span class="number"> <i class="fa fa-info"></i> </span> <span class="desc"> <i class="fa fa-check"></i> Account Setup </span> </a> </li>
              <li> <a href="#tab2" data-toggle="tab" class="step"> <span class="number"> <i class="fa fa-bank"></i> </span> <span class="desc"> <i class="fa fa-check"></i> Profile Setup </span> </a> </li>
              <li> <a href="#tab3" data-toggle="tab" class="step active"> <span class="number"> <i class="fa fa-user"></i> </span> <span class="desc"> <i class="fa fa-check"></i> Billing Setup </span> </a> </li>
            </ul>
            <!--<div id="bar" class="progress progress-striped" role="progressbar">
                    <div class="progress-bar progress-bar-success"> </div>
                  </div>-->
            <div class="tab-content panel">
              <div class="alert alert-danger display-none">
                <button class="close" data-dismiss="alert"></button>
                You have some form errors. Please check below. </div>
              <div class="alert alert-success display-none">
                <button class="close" data-dismiss="alert"></button>
                Your form validation is successful! </div>
              <div class="tab-pane panel-body active" id="tab1">
                <h3 class="block">Basic Information:</h3>
                <div class="form-group">
                  <label class="control-label col-md-2">Business Type <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" class="form-control required" name="business_type" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">My Industry <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="industry" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Sub Category </label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="sub_industry" />
                  </div>
                </div>
                <h4 class="block">What best describes you?</h4>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-2">
                  	<div class="radio-list">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="accountant" data-title="Male"/>
                        Accountant </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="owner" data-title="Female"/>
                        Business Owner </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="freelancer" data-title="Female"/>
                        Freelancer </label>
                    </div>  
                  </div>
                </div>
                <style>
			.modules{
				display:block;
			}
			.module{
				position:relative;
				display:inline-block;
				float:left;
				width: 124px;
				margin:2px 2px 0px 0px;
				border-color:#ccc;
				
			}
			.module.checked {
				color:#428bca;
				border-color:#428bca;
			}
			.module.disabled {
				 color: inherit !important; 
				 border-color:#ccc !important;
			}
			.module.checked .title{
				border: 1px solid;
			}
			.module .title{
				display:block;
				overflow:hidden;
				position: relative;
				width: 100%;
				height:125px;
				padding: 10px;
				margin: 0;
				border: 1px solid;
			}
			.module .title .icons{
				display: block;
				font-size: 44px;
				line-height:44px;
				text-align: center;
				margin: 2px auto;
			}
			.module .title > span{
				display: block;
				font-size: 16px;
				line-height:20px;
				text-align: center;
				margin: 5px auto;
			}
			.module .title .checker span{
				background:none !important;
			}
			.module .title .checker span,
			.module input{
				position:absolute;
				left:-10000px;
				opacity:0;
			}
			.module .ok{
				display:none;
				font-size: 26px;
				line-height: 26px;
				top: 5px;
				left: 5px;
			}
			
			.module.checked .ok{
				position:absolute;
				display:block;
			}
			.module .options{
				position: absolute;
				top:100%;
				width: 100%;
				overflow:hidden;
				background-color: #fff;
				border: none;
				z-index: 999999;
				
				max-height:0px;
				-webkit-transition:max-height 500ms ease;
				-moz-transition:max-height 500ms ease;
				-o-transition:max-height 500ms ease;
				transition:max-height 500ms ease;
			}
			
			.module.checked:hover .options{
				max-height:500px;
			}
			
			.module.disabled:hover .options{
				display:none;
			}
			
			.module .options span{
				display:block;
				margin:0;
				padding:8px 5px 8px 8px;
				border:1px solid;
				border-top:none;
				cursor: default;
			}
			.module.disabled label{
				cursor:default !important;
			}

			#error{
				display:none;
				margin-top:10px;
				color:#F00;
			}
			</style>
                <div class="form-group">
                  <label class="control-label col-sm-12" for="rights">Select Modules:</label>
                  <div class="col-sm-12">
                    <div class="modules">
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[sales]" value="0">
                          <input type="checkbox" name="modules[sales]" id="sales" value="1">
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-file-text-o icons"></i>
                          <span>Sales</span>
                        </label>
                        <div class="options">
                        <span><i class="fa fa-check"></i> Invoices</span>
                        <span><i class="fa fa-check"></i> Quotations</span>
                        <span><i class="fa fa-check"></i> Customers</span>
                        <span><i class="fa fa-check"></i> Products</span>
                        </div>
                      </div>
                      
                      <div class="module checked"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[purchase]" value="0">
                          <input type="checkbox" name="modules[purchase]" id="purchase" value="1" checked >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-list-alt icons"></i>
                          <span>Purchase</span>
                        </label>
                        <div class="options">
                            <span><i class="icon-ok"></i> Vouchers</span>
                            <span><i class="icon-ok"></i> Suppliers</span>
                        </div>
                      </div>
                      
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[accounts]" value="0">
                          <input type="checkbox" name="modules[accounts]" id="accounts" value="1" >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-dollar icons"></i>
                          <span>Accounts</span>
                        </label>
                        <div class="options">
                            <span><i class="icon-ok"></i> Vouchers</span>
                            <span><i class="icon-ok"></i> Suppliers</span>
                        </div>
                      </div>
                      
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[reports]" value="0">
                          <input type="checkbox" name="modules[reports]" id="reports" value="1" >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="icon-bar-chart icons"></i>
                          <span>Reports</span>
                        </label>
                      </div>
                      
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[inventory]" value="0">
                          <input type="checkbox" name="modules[inventory]" id="inventory" value="1" >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-file-text icons"></i>
                          <span>Inventory</span>
                        </label>
                      </div>
                      
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[projects]" value="0">
                          <input type="checkbox" name="modules[projects]" id="reports" value="1" >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-user icons"></i>
                          <span>Project Management</span>
                        </label>
                      </div>
                      
                      <div class="module"> 
                        <label class="checkbox-inline title">
                          <input type="hidden" name="modules[payroll]" value="0">
                          <input type="checkbox" name="modules[payroll]" id="payroll" value="1" >
                          <i class="fa fa-check-circle ok"></i>
                          <i class="fa fa-money icons"></i>
                          <span>Pay Roll</span>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                      <div id="error">Select at least 1 module.</div>
                    </div>
                    
                  </div>
                </div>
              </div>
              
              <div class="tab-pane panel-body" id="tab2">
                <h3 class="block">Company Information</h3>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Company Logo</label>
                  <div class="col-md-8">
                    <input type="file" class="form-control" name="logo" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Company Name <span class="required"> * </span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="company" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Email <span class="required"> * </span> </label>
                  <div class="col-md-8">
                    <input type="email" class="form-control" name="email" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Phone</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Mobile</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="mobile" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">NTN Number</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="ntn" />
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Address <span class="required"> * </span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="address"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">City</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="city" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">State</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="state" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Country</label>
                  <div class="col-md-8">
                    <select name="country" id="country_list" class="form-control">
                      <option value=""></option>
                      <option value="PK">Pakistan</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SH">St. Helena</option>
                      <option value="PM">St. Pierre and Miquelon</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">Remarks</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="3" name="remarks"></textarea>
                  </div>
                </div>
                </div>
              </div>
              </div>
              <div class="tab-pane panel-body" id="tab3">
                <h3 class="block">Provide your billing and credit card details</h3>
                <div class="form-group">
                  <label class="control-label col-md-3">Card Holder Name <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="card_name"/>
                    <span class="help-block"> </span> </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Card Number <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="card_number"/>
                    <span class="help-block"> </span> </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">CVC <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" placeholder="" class="form-control" name="card_cvc"/>
                    <span class="help-block"> </span> </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Expiration(MM/YYYY) <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date"/>
                    <span class="help-block"> e.g 11/2020 </span> </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Payment Options <span class="required"> * </span> </label>
                  <div class="col-md-4">
                    <div class="checkbox-list">
                      <label>
                        <input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."/>
                        Auto-Pay with this Credit Card </label>
                      <label>
                        <input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."/>
                        Email me
                        monthly billing </label>
                    </div>
                    <div id="form_payment_error"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <div class="row">
              <div class="col-md-offset-2 col-md-9"> <a href="javascript:;" class="btn default button-previous"> <i class="m-icon-swapleft"></i> Back </a> <a href="javascript:;" class="btn blue button-next"> Continue <i class="m-icon-swapright m-icon-white"></i> </a> <a href="javascript:;" class="btn green button-submit"> Submit <i class="m-icon-swapright m-icon-white"></i> </a> </div>
            </div>
          </div>
        </div>
      </form>
      </div>
      <!--/row--> 
      <!-- END PAGE CONTENT--> 
    </div>
  </div>
  <!-- END CONTENT --> 
<?php include "template/footer.php"; ?>
<script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/pages/form-wizard.js"></script>

<script>
    jQuery(document).ready(function () {
        App.init(); // init metronic core componets
        Layout.init(); // init layout
        FormWizard.init();
		
		$(".options input").on("change",function(){
			if($(this).is(":checked")){
				$(this).parent("label").addClass("checked");
			}else{
				$(this).parent("label").removeClass("checked");
			}
		});
		$(".module .title input").on("change",function(){
			total_checked = $(".module .title  input:checked").length;
			if(!total_checked){
				$("#error").show();
				$("#submit").attr("disabled",true);
			}else{
				$("#error").hide();
				$("#submit").attr("disabled",false);
			}
			thisid = $(this).attr('id');
			var checked = $(this).is(":checked");	
			if (checked) {
				$(this).parents(".module").addClass("checked");
				$("input[id='"+thisid+"[]']").each(function (){
					$(this).attr("checked", false);
					$(this).attr("disabled", false);
				});
			} else {
				$(this).parents(".module").removeClass("checked");
				$("input[id='"+thisid+"[]']").each(function (){
					$(this).parent("label").removeClass("checked");
					$(this).attr("checked", false);
					$(this).attr("disabled", true);
				});
			}
		});
    });
</script> 

</body>
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
</html>