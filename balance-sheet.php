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
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/pages/reports.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="images/favicon.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
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
      <!-- BEGIN PAGE HEADER-->
      <div class="row page-bar">
        <ul class="page-breadcrumb">
          <li> <i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> </li>
          <li> <a href="#">Reports</a> <i class="fa fa-angle-right"></i> </li>
          <li> <a href="#">Balance Sheet</a> </li>
        </ul>
      </div>
      <!-- END PAGE HEADER--> 
      <!-- BEGIN PAGE CONTENT-->
      <section class="margin-bottom-30 report balance-sheet">
        <div class="panel border-letter"> 
          <!--<div class="panel-heading navyblue"> INVOICE</div>-->
          
          <div class="panel-body">
            <div class="report-header">
             <div class="logo">
             	<div class="img">
             	<img src="company/1/logo.jpg" />
                </div>
                <span>Ivoke Digital</span>
             </div>
             <div>
              <div class="title">Balance Sheet</div>
              <div class="sub-title">As on 31-10-2015</div>
              <div class="detail"></div>
             </div>
            </div>
              <!--hr-->
              <table class="details table table-noborder table-condensed">
                <thead>
                  <tr>
                    <th></th>
                    <th style="text-align: right">PKR '000</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><h3>Equity and Liabilities</h3></td>
                    <td></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h4>Share Capital &amp; Reserves</4></td>
                    <td></td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=11&amp;ason=2015-10-31" target="_blank">Issued Subscription &amp; Paid Up Capital</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=12&amp;ason=2015-10-31" target="_blank">Reserves</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name">Accumulated Profit</td>
                    <td class="value">-30,762.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="total">-30,762.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h4>Long Term Liabilities</h4></td>
                    <td></td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=21&amp;ason=2015-10-31" target="_blank">Deffered Liabilities</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=22&amp;ason=2015-10-31" target="_blank">Long Term Finance</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=23&amp;ason=2015-10-31" target="_blank">Long Term Lease Liabilities</a></td>
                    <td class="value">0.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="total">0.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h4>Current Liabilities</h4></td>
                    <td></td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=31&amp;ason=2015-10-31" target="_blank">Account Payable</a></td>
                    <td class="value">5,553,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=32&amp;ason=2015-10-31" target="_blank">Wages Payable</a></td>
                    <td class="value">280,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=33&amp;ason=2015-10-31" target="_blank">Expenses Payable</a></td>
                    <td class="value">10,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=34&amp;ason=2015-10-31" target="_blank">Taxes / Mark Up Payable</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=35&amp;ason=2015-10-31" target="_blank">Short Term Loans</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=36&amp;ason=2015-10-31" target="_blank">Other Payable</a></td>
                    <td class="value">0.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="total">5,843,000.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="grand_total">5,812,238.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h3>Assets</h3></td>
                    <td></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h4>Non-current Assets</h4></td>
                    <td></td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=41&amp;ason=2015-10-31" target="_blank">Fixed Assets-Owned</a></td>
                    <td class="value">5,553,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=42&amp;ason=2015-10-31" target="_blank">Fixed Assets-Leased</a></td>
                    <td class="value">35,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=49&amp;ason=2015-10-31" target="_blank">Other Non-current Assets</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=43&amp;ason=2015-10-31" target="_blank">Accumulated Depreciation - Owned</a></td>
                    <td class="value">-250,000.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=44&amp;ason=2015-10-31" target="_blank">Accumulated Depreciation - Leased</a></td>
                    <td class="value">0.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="total">5,338,000.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><h4>Current Assets</h4></td>
                    <td></td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=51&amp;ason=2015-10-31" target="_blank">Cash Accounts</a></td>
                    <td class="value">359,750.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=52&amp;ason=2015-10-31" target="_blank">Bank Accounts</a></td>
                    <td class="value">77,552.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=53&amp;ason=2015-10-31" target="_blank">Accounts Receivable</a></td>
                    <td class="value">446,258.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=54&amp;ason=2015-10-31" target="_blank">Advances, Deposits, &amp; Pre-payments</a></td>
                    <td class="value">45,678.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=55&amp;ason=2015-10-31" target="_blank">Stocks In Trade</a></td>
                    <td class="value">0.00</td>
                  </tr>
                  <tr class="trow">
                    <td class="ac-name"><a href="http://eccountant.co/beta/reports/account-notes.html?id=56&amp;ason=2015-10-31" target="_blank">Other Current Assets</a></td>
                    <td class="value">0.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="total">929,238.00</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="ac-name"></td>
                    <td class="grand_total">6,267,238.00</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </section>
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
});
</script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>