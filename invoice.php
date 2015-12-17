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

<link href="css/form-grid.css" rel="stylesheet" type="text/css"/>
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/pages/invoice.css" rel="stylesheet" type="text/css"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-menu-closed">
<?php include "template/header.php"; ?>
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
      <form action="" class="validate_formd" id="invoice_form" method="post">
        <div class="row">
          <div class="invoice">
            <div class="col-lg-12 margin-bottom-10 invoice-header">
              <div class="col-md-6">
                <button type="submit"  class="btn btn-primary btn-sm hline"><i class="fa fa-edit"></i> Save</button>
              </div>
              <div class="col-md-6"> <a  href="#" class="btn btn-success btn-sm hline pull-right"><i class="fa fa-thumbs-up"></i> Save and Finalize</a> </div>
            </div>
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body invoice-body">
                  <div class="row info">
                    <div class="col-lg-6"> <img src="company/1/logo.jpg" /> </div>
                    <div class="col-lg-6">
                      <table align="right" class="align-right">
                        <thead>
                          <tr>
                            <th colspan="2"><h3>Invoice</h3></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Billing Date</th>
                            <td>15-10-2015</td>
                          </tr>
                          <tr>
                            <th>Due Date</th>
                            <td>15-11-2015</td>
                          </tr>
                          <tr>
                            <th>Reference</th>
                            <td>UBL-25846584</td>
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
                            <td>Phone</td>
                            <td>+92-42-12345678</td>
                          </tr>
                          <tr>
                            <td>Fax</td>
                            <td>+92-42-12345678</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>sales@domain.com</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-sm-4">
                      <h2>Billing To</h2>
                      <table class="align-right">
                        <thead>
                          <tr>
                            <th colspan="2">
                                <div class="input-group m-bot5">
                                  <select name="customer" id="contacts" class="form-control required">
                                    <option value="">Select Customer</option>
                                    <option value="20032">Akbar Kinras</option>
                                    <option value="20033">Cothm</option>
                                    <option value="20036">HMC</option>
                                    <option value="20031">Ivoke</option>
                                    <option value="20022">Media Tribes</option>
                                    <option value="20034">Safe Line</option>
                                    <option value="20023">Zany Mart</option>
                                    <option disabled="disabled">---------------</option>
                                    <option value="add">Add Customer</option>
                                  </select>
                                  <span class="input-group-btn">
                                  <button class="btn btn-default" type="button" id="editcustumer" value="" disabled="disabled"> <i class="fa fa-edit"></i></button>
                                  </span> </div>
                              </th>
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
                    <div class="col-md-4"> </div>
                  </div>
                  <hr>
                  <div class="row info margin-bottom-15">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label" for="issue_date">Invoice Date*</label>
                            <input id="issue_date" name="invoice_date" type="text" value="<?php echo date("d-m-Y",time()); ?>" size="16" class="form-control required" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label">Payment Terms</label>
                            <select class="form-control m-bot5" id="payment_terms" name="payment_term">
                              <option value="cash">Cash</option>
                              <option value="cheque">Cheque</option>
                              <option value="8">Net 8 Days</option>
                              <option value="14" selected >Net 14 Days</option>
                              <option value="30">Net 30 Days</option>
                              <option value="due">Due Date</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label" for="duedate">Due Date*</label>
                            <input id="duedate" name="duedate" type="text" value="<?php echo date("d-m-Y",strtotime("+14 days", time())); ?>" class="form-control required" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label" for="recurring">Recurring</label>
                            <select class="form-control" id="recurring" name="recurring">
                              <option value="">None</option>
                              <option value="1 month">Monthly</option>
                              <option value="3 month">3 Month</option>
                              <option value="6 month">6 Month</option>
                              <option value="1 year">Yearly</option>
                              <option value="2 year">2 Year</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 clearfix">
                      <div class="row">
                        <div id="cash" style="display: none;">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="payment_to">Cash Account</label>
                              <select name="payment_to" id="payment_to" class="form-control required" disabled="">
                                <option value="">Select Account</option>
                                <option value="20029">Cash Account</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div id="cheque" style="display: none;">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="payment_to">Bank Account</label>
                              <select name="payment_to" id="payment_to" class="form-control required">
                                <option value="">Select Account</option>
                                <option value="20030">United Bank Limited</option>
                                <option value="20035">HBL Main Boulevard</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label class="control-label" for="cheque_num">Cheque No*</label>
                              <input id="cheque_num" name="cheque_num" type="text" value="" class="form-control required">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label class="control-label" for="cheque_amount">Cheque Amount*</label>
                              <input id="cheque_amount" name="cheque_amount" type="text" value="" class="form-control required">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
                      <div class="form-grid">
                        <div class="gheader">
                          <div class="gr">
                            <div class="gd itemName"> Product </div>
                            <div class="gd itemDesc"> Description </div>
                            <div class="gd itemQty"> Qty </div>
                            <div class="gd itemUnit"> UoM </div>
                            <div class="gd itemPrice"> Price </div>
                            <div class="gd itemAmount"> Amount </div>
                            <div class="gd itemDell" style="width:35px;"> </div>
                          </div>
                        </div>
                        <div id="products" class="gbody" > 
                          <!--</div>
            <div  id="products" class="productGrid">-->
                          <div class="gr" id="product_1">
                            <div class="gd itemName">
                              <label for="product_id1">Product</label>
                              <select name="product[1][product_id]" id="product_id1" class="form-control required pname" onchange="loadProduct(this.value,'1')">
                                <option value="">Select Product</option>
                                <option value="2">Hard Disk</option>
                                <option value="4">Monitor</option>
                                <option value="7">Key Board</option>
                                <option value="12">USB Mouse</option>
                                <option value="13">Social Media </option>
                                <option value="14">Website Development </option>
                                <option disabled="disabled">---------------</option>
                                <option value="add">Add Product</option>
                              </select>
                              <input type="hidden" name="product[1][name]" id="name1">
                            </div>
                            <div class="gd itemDesc">
                              <label for="product_desc1">Description</label>
                              <input type="text" class="form-control required desc" name="product[1][product_desc]" id="product_desc1" value="" />
                            </div>
                            <div class="gd itemQty">
                              <label for="qty1">Qty</label>
                              <input type="text" class="form-control required qty" name="product[1][qty]" id="qty1" value="1" onkeyup="setAmount(1)">
                            </div>
                            <div class="gd itemUnit">
                              <label for="unit1">UoM</label>
                              <select class="form-control required unit" name="product[1][unit]" id="unit1">
                                <option value="">Select Unit</option>
                                <option value="1">None</option>
                                <option value="2">Hour</option>
                                <option value="3">Day</option>
                                <option value="4">Month</option>
                                <option value="5">Year</option>
                                <option value="6">Year</option>
                                <option value="7">Each</option>
                                <option value="8">Carton</option>
                                <option value="9">kg</option>
                                <option value="10">Litre</option>
                                <option value="11">Meter</option>
                                <option value="12">Squire Mete</option>
                                <option value="13">Cubic Meter</option>
                                <option value="14">Night</option>
                                <option value="15">Package</option>
                                <option value="16">Ton</option>
                              </select>
                            </div>
                            <div class="gd itemPrice">
                              <label for="price1">Price</label>
                              <input type="text" class="form-control required price" name="product[1][price]" id="price1" placeholder="0.00" onkeyup="setAmount(1)">
                            </div>
                            <div class="gd itemAmount">
                              <label for="net_amount1">Amount</label>
                              <input type="text" class="form-control amount" name="product[1][net_amount]" id="net_amount1" placeholder="0.00" disabled="">
                            </div>
                            <div class="gd itemDell"> <a href="javascript: rpl(1);" class="btn btn-white delete"><i class="icon-trash"></i></a> </div>
                          </div>
                        </div>
                        <div class="gfooter">
                          <div class="gr">
                            <div class="gd">
                              <input type="hidden" value="1" id="count">
                              <button class="btn btn-info newline" type="button" id="newline"> <i class="icon-plus"></i> New Line </button>
                            </div>
                            <div class="gd"></div>
                            <div class="gd"> </div>
                            <div class="gd"> </div>
                            <div class="gd"> </div>
                            <div class="gd"> </div>
                            <div class="gd"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row total-info margin-bottom-30">
                  <div class="col-lg-6">
                    <label>Additional notes:</label>
                    <textarea class="form-control" rows="3" cols="20" name="description" placeholder="Additional notes for customer"></textarea>
                  </div>
                  <div class="col-md-6 text-right">
                    <table class="pull-right">
                      <tbody>
                        <tr>
                          <th>Sub Total:</th>
                          <td width="160"><span class="currency">Rs.</span> <span id="subtotal">0.00</span></td>
                        </tr>
                        <tr>
                          <th>Discount:</th>
                          <td width="160">
                            <div class="form-group input-group">
                            	<span class="input-group-addon">Rs.</span>
                                  <div class="input-icon left"> <i class="fa"></i>
                                    <input type="text" id="discount" name="discount" value="" class="form-control input-sm number text-right">
                                  </div>
                            </div></td>
                        </tr>
                        <tr style="border-top:1px solid #ddd">
                          <th>Tax Exclusive Value:</th>
                          <td width="160"><span class="currency">Rs.</span> <span id="disctotal">0.00</span></td>
                        </tr>
                        <tr style="border-top:1px solid #ddd">
                          <th> Taxes:</th>
                          <td></td>
                        </tr>
                        <tr class="tax-row field" id="field_tax_1">
                          <th valign="top">
                           <div class="form-group">
                           	<div class="input-icon right input-inline">
                            <i class="fa"></i>
                          	<select name="taxes[]" id="tax_1" class="taxes input-inline" style="display: none;">
                              <option value="0" data-val="0">None</option>
                              <option value="1:16" data-val="1">Sales Tax (16%)</option>
                              <option value="2:2.5" data-val="2">GST (2.5%)</option>
                              <option value="5:10" data-val="5">New Tax (10%)</option>
                              </select>
                              </div>
                            <a href="javascript:;" class="add-tax"><i class="fa fa-plus tooltips" data-original-title="Add Tax"></i>
                            </a><a href="javascript:;" class="del-tax hide"><i class="fa fa-trash tooltips" data-original-title="Remove Tax"></i></a>
                            </div>
                          </th>
                          <td><span class="currency">Rs.</span> <span class="tax" id="val_tax_1">0.00</span></td>
                        </tr>
                        <tr class="tax-row total" id="total_tax_1" style="border-top:1px solid #ddd">
                        	<th><span class="title">Tax Inclusive Value:</span></th>
                            <td width="160"><span class="currency">Rs.</span> <span class="tax">0.00</span></td>
                        </tr>
                        <tr style="border-top:1px solid #ddd">
                          <th>Total:</th>
                          <td><span class="currency">Rs.</span> <span id="total">0.00</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                  <div class="row invoice-footer">
                    <div class="col-lg-12"> Desigend & Made by:<br>
                      <img src="images/logo.png" height="30"  > </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row margin-bottom-10"> </div>
        <!--/row-->
      </form>
      <!-- END PAGE CONTENT--> 
    </div>
  </div>
  <!-- END CONTENT --> 
  
</div>
<!-- END CONTAINER -->

<?php include "template/footer.php"; ?>
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/quick-sidebar.js" type="text/javascript"></script> 
<script src="js/pages/invoices.js" type="text/javascript"></script> 
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
<div id="pdata" style="display:none;">
  <div class="gr" id="product_{count}">
    <div class="gd itemName">
      <label for="product_id{count}">Product</label>
      <select name="product[{count}][product_id]" id="product_id{count}" class="form-control required pname" onchange="loadProduct(this.value,'{count}')">
        <option value="">Select Product</option>
        <option value="2">Hard Disk</option>
        <option value="4">Monitor</option>
        <option value="7">Key Board</option>
        <option value="12">USB Mouse</option>
        <option value="13">Social Media</option>
        <option value="14">Website Development</option>
        <option disabled="disabled">---------------</option>
        <option value="add">Add Product</option>
      </select>
      <input type="hidden" name="product[{count}][name]" id="name{count}">
    </div>
    <div class="gd itemDesc">
      <label for="product_desc{count}">Description</label>
      <input type="text" class="form-control required desc" name="product[{count}][product_desc]" id="product_desc{count}" />
    </div>
    <div class="gd itemQty">
      <label for="qty{count}">Qty</label>
      <input type="text" class="form-control required qty" name="product[{count}][qty]" id="qty{count}" value="1" onkeyup="setAmount({count})">
    </div>
    <div class="gd itemUnit">
      <label for="unit{count}">UoM</label>
      <select class="form-control required unit" name="product[{count}][unit]" id="unit{count}">
        <option value="">Select Unit</option>
        <option value="1">None</option>
        <option value="2">Hour</option>
        <option value="3">Day</option>
        <option value="4">Month</option>
        <option value="5">Year</option>
        <option value="6">Year</option>
        <option value="7">Each</option>
        <option value="8">Carton</option>
        <option value="9">kg</option>
        <option value="10">Litre</option>
        <option value="11">Meter</option>
        <option value="12">Squire Mete</option>
        <option value="13">Cubic Meter</option>
        <option value="14">Night</option>
        <option value="15">Package</option>
        <option value="16">Ton</option>
      </select>
    </div>
    <div class="gd itemPrice">
      <label for="price{count}">Price</label>
      <input type="text" class="form-control required price" name="product[{count}][price]" id="price{count}" placeholder="0.00" onkeyup="setAmount({count})">
    </div>
    <div class="gd itemAmount">
      <label for="net_amount{count}">Amount</label>
      <input type="text" class="form-control amount" name="product[{count}][net_amount]" id="net_amount{count}" placeholder="0.00" disabled="">
    </div>
    <div class="gd itemDell"><a href="javascript: rpl({count});" class="btn btn-white delete"><i class="icon-trash"></i></a></div>
  </div>
</div>
</html>