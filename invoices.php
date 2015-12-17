<?php
include "app.php";

$from 	= isset($_GET['from']) ? strtotime($_GET['from']): time() ;
$to 	= isset($_GET['to']) ? strtotime($_GET['to']): time() ;
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
<link href="css/pages/voucher.css" rel="stylesheet" type="text/css"/>


<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>

</head>
<body class="page-header-fixed">
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
      <div class="row margin-bottom-30">

        <div class="col-lg-10 boxes clearfix">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="large">
            <a href="#" class="from_date" id="from_date" data-date-format="mm yyyy" data-date="<?php echo date("m Y", $from) ; ?>">
            <?php echo date("F Y", $from) ; ?></a>
            <input type="hidden" id="to" name="to" value="" />
            
            <a href="#" class="to_date" id="to_date" data-date-format="mm yyyy" data-date="<?php echo date("m Y", $to) ; ?>">
            <?php echo date("F Y", $to) ; ?></a>
            <input type="hidden" id="from" name="from" value="" />
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <?php $for = isset($_GET['for']) ? "for=".$_GET['for']."&": '' ; ?>
            <a href="?<?php echo $for ?>list=draft" class="small blue-fg">
            <div class="img blue-bg"><i class="fa fa-file-o"></i></div>
            <div class="num">5</div>
            <div> <strong>Draft</strong> <em>PKR 55000.00</em> </div>
            </a> </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"> <a href="?<?php echo $for ?>list=reported" class="small red-fg">
            <div class="img red-bg"><i class="fa fa-file-o"></i></div>
            <div class="num">5</div>
            <div> <strong>Unpaid</strong> <em>PKR 55000.00</em> </div>
            </a> </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"> <a href="?<?php echo $for ?>list=aproved" class="small nevy-fg">
            <div class="img nevy-bg"><i class="fa fa-file-o"></i></div>
            <div class="num">5</div>
            <div> <strong>Advanced</strong> <em>PKR 55000.00</em> </div>
            </a> </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"> <a href="?<?php echo $for ?>list=pending" class="small green-fg">
            <div class="img green-bg"><i class="fa fa-file-o"></i></div>
            <div class="num">5</div>
            <div> <strong>Paid</strong> <em>PKR 55000.00</em> </div>
            </a> </div>
        </div>
        <div class="col-lg-2 clearfix">
          <div class="btn-group margin-top-10 pull-right"> <a href="invoice.php" class="btn btn-primary hline"><i class="fa fa-plus"></i> Create Invoice</a> </div>
        </div>
      </div>
      <div class="row margin-bottom-10">
        <div class="col-lg-12 margin-bottom-15">
          <div class="panel">
            <div class="table-responsive3">
              <table class="table table-striped table-condensed table-bordered-cols" id="data_table">
                <thead>
                  <tr>
                    <th width="100"><a href=""><i class="fa fa-sort-desc"></i> Invoice No.</a></th>
                    <th width="100"><a href=""><i class="fa fa-sort"></i> Date</a></th>
                    <th><a href=""><i class="fa fa-sort"></i> Customer</a></th>
                    <th><a href=""><i class="fa fa-sort"></i> Contact</a></th>
                    <th width="100"><a href=""><i class="fa fa-sort"></i> Due Date</a></th>
                    <th width="180"><a href=""><i class="fa fa-sort"></i> Amount</a></th>
                    <th width="150"><a href=""><i class="fa fa-sort"></i> Paid</a></th>
                    <th width="150" class="hide-print"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="view-invoice.php"> <i class="icon-file-text" style="margin-right:5px;"></i> #IV-0004 </a></td>
                    <td>2015-06-25</td>
                    <td>Ivoke</td>
                    <td>Gohar Shafeeq</td>
                    <td><span class="error"> 2015-07-09</span></td>
                    <td class="">Rs. 46,000.00 <span style="font-size:12px;"></span></td>
                    <td class="">Rs. 20,000.00</td>
                    <td class="hide-print">
                    	<div class="btn-group" style="float:right">
                        <a href="view-invoice.php" class="btn btn-default btn-xs" title="View"> <i class="fa fa-file-o"></i></a>
                        <a href="#" class="send-invoice btn btn-default btn-xs" title="Send"> <i class="fa fa-envelope-o"></i></a>
                        <button type="button" class="btn btn-default dropdown-toggle  btn-xs" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right" role="menu" style="left:auto; right:0;">
                          <li> <a href="#" class="pay" title="Add Payment">Pay Invoice</a></li>
                          <li><a href="#" class="send-invoice" title="Send Invoice">Send</a></li>
                          <li><a href="#">Copy</a></li>
                          <li><a href="#">Print</a></li>
                          <li class="divider"></li>
                          <li><a href="#">View PDF</a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td><a href="view-invoice.php"> <i class="icon-file-text" style="margin-right:5px;"></i> #IV-0005 </a></td>
                    <td>2015-06-30</td>
                    <td>Akbar Kinras</td>
                    <td>Mr Asif</td>
                    <td><span class="error"> 2015-07-14</span></td>
                    <td class="">Rs. 70,000.00 <span style="font-size:12px;"></span></td>
                    <td class="">Rs. 50,000.00</td>
                    <td class="hide-print">
                    	<div class="btn-group" style="float:right">
                        <a href="view-invoice.php" class="btn btn-default btn-xs" title="View"> <i class="fa fa-file-o"></i></a>
                        <a href="#" class="send-invoice btn btn-default btn-xs" title="Send"> <i class="fa fa-envelope-o"></i></a>
                        <button type="button" class="btn btn-default dropdown-toggle  btn-xs" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right" role="menu" style="left:auto; right:0;">
                          <li> <a href="#" class="pay" title="Add Payment">Pay Invoice</a></li>
                          <li><a href="#" class="send-invoice" title="Send Invoice">Send</a></li>
                          <li><a href="#">Copy</a></li>
                          <li><a href="#">Print</a></li>
                          <li class="divider"></li>
                          <li><a href="#">View PDF</a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td><a href="view-invoice.php"> <i class="icon-file-text" style="margin-right:5px;"></i> #IV-0011 </a></td>
                    <td>2015-08-16</td>
                    <td>Safe Line</td>
                    <td>Zain Ashrif</td>
                    <td><span class="error"> 2015-08-16</span></td>
                    <td class="">Rs. 89,700.00 <span style="font-size:12px;"></span></td>
                    <td class="">Rs. 80,000.00</td>
                    <td class="hide-print">
                    	<div class="btn-group" style="float:right">
                        <a href="view-invoice.php" class="btn btn-default btn-xs" title="View"> <i class="fa fa-file-o"></i></a>
                        <a href="#" class="send-invoice btn btn-default btn-xs" title="Send"> <i class="fa fa-envelope-o"></i></a>
                        <button type="button" class="btn btn-default dropdown-toggle  btn-xs" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right" role="menu" style="left:auto; right:0;">
                          <li> <a href="#" class="pay" title="Add Payment">Pay Invoice</a></li>
                          <li><a href="#" class="send-invoice" title="Send Invoice">Send</a></li>
                          <li><a href="#">Copy</a></li>
                          <li><a href="#">Print</a></li>
                          <li class="divider"></li>
                          <li><a href="#">View PDF</a></li>
                        </ul>
                      </div></td>
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
<script src="js/app.js" type="text/javascript"></script> 
<script src="js/layout.js" type="text/javascript"></script> 
<script src="js/quick-sidebar.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 
<script>
jQuery(document).ready(function() {    
   App.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   
	var startDate = new Date(<?php echo date('Y,m,d',strtotime("-1 month",$from) ); ?> );
	var endDate = new Date(<?php echo date('Y,m,d',strtotime("-1 month",$to) ); ?>);
	var action = "<?php echo isset($_GET['list']) ? "&list=".$_GET['list']: '' ; ?>";
	var monthNames = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	$('#from_date').datepicker({
			format: "mm-yyyy",
			viewMode: "months", 
			minViewMode: "months"
		}).on('changeDate', function(ev){
			if (ev.date.valueOf() > endDate.valueOf()){
				App.alert({type:'warning',message:'The start month can not be greater then the end month'});
			} else {
				App.closeAlert();
				startDate = new Date(ev.date);
				str_full_month = monthNames[startDate.getMonth()];
				str_full_year = startDate.getFullYear();
				$("#from_date").text(str_full_month +" "+str_full_year);
				
				from = '01-'+(startDate.getMonth()+1)+'-'+ startDate.getFullYear();
				to = moment(endDate).endOf('month').format('DD')+'-'+(endDate.getMonth()+1)+'-'+ endDate.getFullYear();
				window.location= "?from="+from+'&to='+to+action;
			}
			$('#from_date').datepicker('hide');
		});
	$('#to_date').datepicker({
			format: "mm-yyyy",
			viewMode: "months", 
			minViewMode: "months"
		}).on('changeDate', function(ev){
			if (ev.date.valueOf() < startDate.valueOf()){
				App.alert({type:'warning',message:'The end month can not be less then the start month'});
			} else {
				App.closeAlert();
				endDate = new Date(ev.date);
				eDate = '01-'+(endDate.getMonth()+1)+'-'+ endDate.getFullYear();
				end_full_month = monthNames[endDate.getMonth()];
				end_full_year = startDate.getFullYear();
				$("#to_date").text(end_full_month +" "+end_full_year);
				
				from = '01-'+(startDate.getMonth()+1)+'-'+ startDate.getFullYear();
				to = moment(endDate).endOf('month').format('DD')+'-'+(endDate.getMonth()+1)+'-'+ endDate.getFullYear();
				window.location= "?from="+from+'&to='+to+action;
			}
			$('#to_date').datepicker('hide');
		});
});
</script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>