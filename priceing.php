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
<link href="css/pages/pricing-plan.css" rel="stylesheet" type="text/css"/>
</head>
<body class="page-header-fixed">
<?php include "template/header.php"; ?>
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content pricing"> 
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
      <section class="margin-bottom-30">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="step-title"><span>1</span> Select Subscription</h2>
            <img src="images/pricing-plan.jpg" style="max-width:600px;" /> </div>
        </div>
        <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="step-title"><span>2</span> Select Payment Plan</h2>
          <p>No plans to pick. No features to compare. Eccountant gives <br />
            you everything for one great price.</p>
          <div class="plans clearfix">
            <label>
            <input type="radio" name="plan" class="simple" value="1" data-price="5000" />
            <div class="for">Pay For <span>One Month</span></div>
            <div class="cruncy">PKR</div>
            <div class="amount">5,000<span>/mo</span></div>
            <hr>
            <div class="discount"></div>
            </label>
            <label>
            <input type="radio" name="plan" value="3" class="simple" data-price="4500" />
            <div class="for">Pay For <span>Three Month</span></div>
            <div class="cruncy">PKR</div>
            <div class="amount">4,500<span>/mo</span></div>
            <hr>
            <div class="discount">SAVE Rs. 2,000</div>
            </label>
            <label>
            <input type="radio" name="plan" value="6" class="simple" data-price="4000" />
            <div class="for">Pay For <span>Six Month</span></div>
            <div class="cruncy">PKR</div>
            <div class="amount">4,000<span>/mo</span></div>
            <hr>
            <div class="discount">SAVE Rs. 2,000</div>
            </label>
            <label>
            <input type="radio" name="plan" value="12" data-price="3500" class="simple" />
            <div class="for">Pay For <span>One Year</span></div>
            <div class="cruncy">PKR</div>
            <div class="amount">3,500<span>/mo</span></div>
            <hr>
            <div class="discount">SAVE Rs. 2,000</div>
            </label>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="plan-total">
              <div>
                <div class="side-col">
                  <div><strong>Total Billed</strong></div>
                  <div class="amount">Amount <strong>Rs. <span id="amount">5,000</span></strong></div>
                </div>
                <div class="line">
                  <hr>
                </div>
                <div class="side-col">
                  <div><strong>Billing Cycle</strong></div>
                  <div class="duration" id="duration">1st to 30 Jan</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2 class="step-title text-center"><span>3</span> Deposit Payments</h2>
            <div class="tabs col-lg-7">
              <ul class="nav nav-pillss">
                <li class="active"> <a href="#tab1" data-toggle="tab"><i class="fa fa-credit-card"></i> By Credit Card</a> </li>
                <li> <a href="#tab2" data-toggle="tab"><i class="fa fa-bank"></i> By Bank</a> </li>
              </ul>
              <div class="tab-content clearfix">
                <div class="tab-pane active" id="tab1">
                  <form action="" method="post" class="validate_form">
                    <div class="card-wrap">
                      <div class="fields">
                        <div class="form-group">
                          <input type="text" name="name" value="" class="form-control" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" value="" class="form-control" placeholder="Email Address" required />
                        </div>
                      </div>
                      <div class="card">
                        <bar>Payment Details
                          <logo id="logo" class="visa"></logo>
                        </bar>
                        <num>
                          <div class="form-group">
                            <label>CARD NUMBER</label>
                            <input type="text" name="creditcard" value="" class="form-control creditcard" required />
                          </div>
                        </num>
                        <div>
                          <date>
                            <div class="form-group">
                              <label>EXPIRY DATE</label>
                              <input type="text" name="date" value="" id="date" class="form-control datemask" required />
                            </div>
                          </date>
                          <cvv>
                            <div class="form-group">
                              <label>CVV CODE</label>
                              <input type="text" name="cvv" value="" class="form-control" required />
                            </div>
                          </cvv>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success btn-block" >Pay</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="row text-center">
                    <div class="col-xs-4 bank active">
                      <label>
                      <input type="radio" name="bank" value="abl" class="simple" />
                      <img src="images/abl-logo-sm.png" >
                      <div class="bname">Allied Bank</div>
                      </label>
                    </div>
                    <div class="col-xs-4 bank">
                      <label>
                      <input type="radio" name="bank" value="mezan" class="simple"  />
                      <img src="images/mb-logo-sm.png" >
                      <div class="bname">Mezan Bank</div>
                      </label>
                    </div>
                    <div class="col-xs-4 bank">
                      <label>
                      <input type="radio" name="bank" value="mcb" class="simple"  />
                      <img src="images/mcb-logo-sm.png" >
                      <div class="bname">MCB Bank</div>
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class=" col-lg-12 bank-detail">
                      <div class="bank-col-left">
                        <h4>Manually Update Slip</h4>
                        <div class="form-group form-group-sm">
                          <label class="control-label">Transaction ID: </label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="form-group form-group-sm">
                          <label class="control-label">Date: </label>
                          <input type="text" class="form-control" />
                        </div>
                        <h4>Upload Deposit Slip</h4>
                        <div class="form-group form-group-sm">
                          <label class="control-label">Date: </label>
                          <input type="file" name="slip" class="form-control fileinput" />
                        </div>
                      </div>
                      <div class="bank-col-right">
                        <h4>Banck Details</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/row--> 
      <!-- END PAGE CONTENT--> 
    </div>
  </div>
  <!-- END CONTENT -->
  <?php include "template/footer.php"; ?>
<script type="text/javascript" src="assets/credit-card-validator.js"></script> 
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   
   $(".plans input").on("change",function(){
	   vals = $(this).val();
	   from = moment().format("Do MMM");
	   to = moment().add(vals, 'months').format("Do MMM, YYYY")
	   price = $(this).data("price") * vals;
	   $(".plans label").removeClass("checked");
	   $(this).closest("label").addClass("checked");
	   $("#amount").text(price);
	   $("#duration").text(from+' - '+to);
   });
   $(".bank input").on("change",function(){
	   $(".bank").removeClass("active");
	   $(this).closest(".bank").addClass("active");
   });
	$('.creditcard').validateCreditCard(function(result) {
		if(result.card_type != null){
			$("#logo").attr("class",result.card_type.name);//.removeClass("invalid-card");
			if(!result.valid || !result.length_valid || !result.luhn_valid){
				$("#logo").addClass("dim");
			}
		}else{
			$("#logo").addClass("dim");
		}
	});
});
</script>
</body>
</html>