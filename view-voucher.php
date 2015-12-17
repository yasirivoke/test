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
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/form-grid.css" rel="stylesheet" type="text/css"/>


<link href="css/pages/voucher.css" rel="stylesheet" type="text/css"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-menu-closed"
<?php include "template/header.php"; ?>
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content"> 
     
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
      <div class="row margin-bottom-30">
        <div class="col-lg-9 boxes clearfix">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="large">
            <a href="#" class="from_date" id="from_date" data-date-format="dd-mm-yyyy" data-date="<?php echo $from ; ?>">
            <?php echo date("d M Y", strtotime($from)) ; ?></a>
            <input type="hidden" id="to" name="to" value="" />
            
            <a href="#" class="to_date" id="to_date" data-date-format="dd-mm-yyyy" data-date="<?php echo $to ; ?>">
            <?php echo date("d M Y", strtotime($to)); ?></a>
            <input type="hidden" id="from" name="from" value="" />
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <?php $for = isset($_GET['for']) ? "for=".$_GET['for']."&": '' ; ?>
            <a href="?<?php echo $for ?>list=draft" class="small blue-fg">
              <div class="img blue-bg"><i class="fa fa-file-o"></i></div>
              <div class="num">5</div>
              <div> <strong>Draft</strong> <em>PKR 55000.00</em> </div>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <a href="?<?php echo $for ?>list=reported" class="small nevy-fg">
              <div class="img nevy-bg"><i class="fa fa-file-o"></i></div>
              <div class="num">5</div>
              <div> <strong>Reported</strong> <em>PKR 55000.00</em> </div>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <a href="?<?php echo $for ?>list=aproved" class="small green-fg">
              <div class="img green-bg"><i class="fa fa-file-o"></i></div>
              <div class="num">5</div>
              <div> <strong>Approved</strong> <em>PKR 55000.00</em> </div>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <a href="?<?php echo $for ?>list=pending" class="small red-fg">
              <div class="img red-bg"><i class="fa fa-file-o"></i></div>
              <div class="num">5</div>
              <div> <strong>Unapproved </strong> <em>PKR 55000.00</em> </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 clearfix">
          <div class="btn-group margin-top-10 pull-right">
            <button data-toggle="dropdown" class="btn  btn-primary dropdown-toggle" type="button">Record Voucher <span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu pull-right">
              <li><a href="voucher.php">Jounral Voucher</a></li>
              <li><a href="voucher.php">Receipt Voucher</a></li>
              <li><a href="voucher.php">Payment Voucher</a></li>
              <li class="divider"></li>
              <li><a href="suppliers.php" >Add Supplier</a></li>
              <li><a href="customers.php" >Add Customer</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <div class="voucher"> <a href="view-voucher.php" class="left-arrow"></a>
            <div class="voucher-form">
              <form action="" method="post" id="vouncer_form">
                <div class="panel">
                  <div class="panel-heading blue">Receipt Voucher</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12 top-row margin-bottom-10">
                      	<div class="col-lg-6 clearfix">
                        	<div class="company">
                				<img src="company/1/logo.jpg" height="50">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div><strong>Voucher Date:</strong>	22-09-2015 16:02:30</div>
                        <div><strong>Voucher No.:</strong>	JV-0028 </div>
                        </div>
                      </div>
                      <div class="col-lg-12 middle-row margin-bottom-10" >
                        <table class="table table-noborder table-striped">
                          <thead>
                            <tr>
                              <th style="width: 30px;">Item</th>
                              <th>Account</th>
                              <th>Details</th>
                              <th style="width: 90px;">Debit</th>
                              <th style="width: 90px;">Credit</th>
                            </tr>
                          </thead>
                          <tbody style="overflow: auto">
                            <tr>
                              <td valign="top">1</td>
                              <td valign="top">Zany Mart </td>
                              <td valign="top">Purchased good from jajahsjdash</td>
                              <td valign="top">--</td>
                              <td valign="top">150000</td>
                            </tr>
                            <tr>
                              <td valign="top">2</td>
                              <td valign="top">Finished Goods </td>
                              <td valign="top">Purchased good from jajahsjdash</td>
                              <td valign="top">150000</td>
                              <td valign="top">--</td>
                            </tr>
                            <tr>
                              <td valign="top">3</td>
                              <td valign="top">Zany Mart </td>
                              <td valign="top">Purchased good from jajahsjdash</td>
                              <td valign="top">--</td>
                              <td valign="top">150000</td>
                            </tr>
                            <tr>
                              <td valign="top">4</td>
                              <td valign="top">Finished Goods </td>
                              <td valign="top">Purchased good from jajahsjdash</td>
                              <td valign="top">150000</td>
                              <td valign="top">--</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="3" style="text-align:right">Total</td>
                              <td>Rs. 300000</td>
                              <td>Rs. 300000</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <div class="col-lg-12 margin-bottom-30">
                      	<div class="col-lg-4 col-sm-4">
                        	<hr class="margin-bottom-5">
                            <div>Accountant</div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                        	<hr class="margin-bottom-5">
                            <div>Manager Finance / CFO</div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                        	<hr class="margin-bottom-5">
                            <div>Director / CEO</div>
                        </div>
                      </div>
                      <div class="col-lg-12 bottom-row margin-bottom-10">
                       <div class="col-lg-6 col-sm-6">
                        <button type="submit" class="btn btn-success btn-sm hline" value="save" ><span class="fa fa-save"></span> Save</button>
                        <a type="submit" class="btn btn-primary btn-sm hline" value="edit" ><span class="fa fa-edit"></span> Edit</a>
                       </div>
                       <div class="col-lg-6 col-sm-6 text-right">
                        <button type="button" id="report" class="btn btn-danger btn-sm hline" id="report_btn" >
                        <span class="fa fa-file-text"></span> Report Voucher</button>
                        <button type="submit" class="btn btn-success btn-sm hline" value="finalize" >
                        <span class="fa fa-thumbs-up"></span> Finalize Voucher</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="num_pref" id="num_pref" value="RV"  />
                <input type="hidden" name="voucher_type" value="receipt"  />
              </form>
            </div>
            <a href="view-voucher.php" class="right-arrow"></a> </div>
        </div>
        <div class="col-lg-3">
          <div class="panel">
            <div class="thumbs clearfix"> <a href="company/1/receipt1.jpg" class="vimg fancybox-button"  data-rel="fancybox-button"> <img src="company/1/receipt1.jpg" />
              <div class="overlay"><i class="fa fa-search"></i></div>
              </a> <a href="company/1/receipt2.jpg" class="vimg fancybox-button"  data-rel="fancybox-button"> <img src="company/1/receipt2.jpg" />
              <div class="overlay"><i class="fa fa-search"></i></div>
              </a> <a href="company/1/receipt3.jpg" class="vimg fancybox-button"  data-rel="fancybox-button"> <img src="company/1/receipt3.jpg" />
              <div class="overlay"><i class="fa fa-search"></i></div>
              </a> 
              <a href="upload.php" class="vimg fancybox" data-fancybox-type="iframe" title="Upload File" >
                    	<i class="fa fa-file-image-o addimg"></i>
                        <div class="overlay"><i class="fa fa-plus"></i></div>
                    </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-bottom-10">
        <div class="col-lg-12 margin-bottom-15">
          <div class="panel">
            <div class="table-responsive">
              <table class="table table-striped table-condensed table-bordered-cols" >
                <thead>
                  <tr>
                    <th><a href="" ><i class="fa fa-sort-desc"></i> Voucher #</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Date</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Account Name</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Description</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Received In</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Amount</a></th>
                    <th><a href="" ><i class="fa fa-sort"></i> Status</a></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="view-voucher.php">RV-00037</a></td>
                    <td>2015-05-06</td>
                    <td>Deffred Tax</td>
                    <td>test suplier</td>
                    <td></td>
                    <td>Rs. 5000.00</td>
                    <td><span class="label bg-blue">Draft</span></td>
                    <td><a class="btn btn-xs"><i class="fa fa-edit"></i></a> <a class="btn btn-xs"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="view-voucher.php">RV-00036</a></td>
                    <td>2015-05-06</td>
                    <td>Deffred Tax</td>
                    <td>test suplier</td>
                    <td></td>
                    <td>Rs. 5000.00</td>
                    <td><span class="label bg-green">Approved</span></td>
                    <td><a href="view-voucher.php" class="btn btn-xs"><i class="fa fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="view-voucher.php">RV-00035</a></td>
                    <td>2015-05-06</td>
                    <td>Deffred Tax</td>
                    <td>test suplier</td>
                    <td></td>
                    <td>Rs. 5000.00</td>
                    <td><span class="label bg-green">Approved</span></td>
                    <td><a href="view-voucher.php" class="btn btn-xs"><i class="fa fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="view-voucher.php">RV-00034</a></td>
                    <td>2015-05-06</td>
                    <td>Deffred Tax</td>
                    <td>test suplier</td>
                    <td></td>
                    <td>Rs. 5000.00</td>
                    <td><span class="label bg-red">Unapproved</span></td>
                    <td><a href="view-voucher.php" class="btn btn-xs"><i class="fa fa-eye"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="text-center">
            <ul class="pagination">
              <li> <a href="javascript:;"> <i class="fa fa-angle-left"></i> </a> </li>
              <li class="active"> <a href="javascript:;"> 1 </a> </li>
              <li> <a href="javascript:;"> 2 </a> </li>
              <li> <a href="javascript:;"> 3 </a> </li>
              <li> <a href="javascript:;"> 4 </a> </li>
              <li> <a href="javascript:;"> 5 </a> </li>
              <li> <a href="javascript:;"> 6 </a> </li>
              <li> <a href="javascript:;"> <i class="fa fa-angle-right"></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/row--> 
      <!-- END PAGE CONTENT--> 
    </div>
  </div>
  <!-- END CONTENT --> 
  
</div>
<!-- END CONTAINER -->

<?php include "template/footer.php"; ?>
<script type="text/javascript" src="assets/bootstrap-fileinput/bootstrap-fileinput.js"></script> 

<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/quick-sidebar.js" type="text/javascript"></script> 
<!--<script src="js/pages/components-form-tools.js"></script>--> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/pages/vouchers.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   
   var startDate = new Date(<?php echo date('Y,m,d',strtotime("-1 month",strtotime($from)) ); ?> );
	var endDate = new Date(<?php echo date('Y,m,d',strtotime("-1 month",strtotime($to))); ?>);
	var action = "<?php echo isset($_GET['list']) ? "&list=".$_GET['list']: '' ; ?>";
	var monthNames = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	var from_date = $('#from_date').datepicker({
			endDate: moment().format('DD-MM-YYYY'),
        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > endDate.valueOf()) {
                App.alert({type: 'warning', message: 'The start month can not be greater then the end month'});
            } else {
				thisdate = new Date(ev.date);
            	to_date.setStartDate(thisdate);
                App.closeAlert();
                startDate = new Date(ev.date);
                $("#from_date").text(moment(startDate).format('DD MMM YYYY'));
				
                from = moment(startDate).format('DD-MM-YYYY');
                to = moment(endDate).format('DD-MM-YYYY'); 
                window.location = "?"+action+"from=" + from + '&to=' + to;
            }
            $('#from_date').datepicker('hide');
        }).data('datepicker');
        var to_date = $('#to_date').datepicker({
			startDate: moment(startDate).format('DD-MM-YYYY'),
			endDate: moment().format('DD-MM-YYYY'),
        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() < startDate.valueOf()) {
                App.alert({type: 'warning', message: 'The end month can not be less then the start month'});
            } else {
                App.closeAlert();
                endDate = new Date(ev.date);
                $("#to_date").text(moment(endDate).format('DD MMM YYYY'));
                from = moment(startDate).format('DD-MM-YYYY');
                to = moment(endDate).format('DD-MM-YYYY'); 
                window.location = "?"+action+"from=" + from + '&to=' + to;
            }
            $('#to_date').datepicker('hide');
        }).data('datepicker');
		
	$("#report").on("click",function(){
		var $resn = $("#resmodal").modal({
				modal: true,
				keyboard: true,
			});
			$resn.on('hidden.bs.modal', function(e) {
				$resn.find('textarea').val(' ');
			});
	});
});
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

	

</script> 
<!-- END JAVASCRIPTS -->
<div class="modal fade" id="resmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Report Reasons:</h4>
        </div>
        <div class="modal-body">
        <textarea name="resons" class="form-control reason nicescroll" ></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn blue">Report</button>
          <button type="button" class="btn default" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
</body><!-- END BODY -->
</html>