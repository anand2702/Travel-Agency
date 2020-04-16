<?php
include("function.php");
$con=makeconnection();
$CustomerName  = $_POST['CustomerName'];
$FatherName  = $_POST['FatherName'];
$DOB  = $_POST['DOB'];
$Address  = $_POST['Address'];
$MobileNo  = $_POST['MobileNo'];
$EmailId  = $_POST['EmailId'];
$State  = $_POST['State'];
$City  = $_POST['City'];
$PinCode  = $_POST['PinCode'];
$DelearName  = $_POST['DelearName'];
$DelearAddress  = $_POST['DelearAddress'];
$IdProof  = $_POST['IdProof'];
$AddressProof  = $_POST['AddressProof'];
$IdImage  = $_POST['Document'];
$AddressImage  = $_POST['Document2'];
$CustomerId  = $_POST['CustomerId'];
$Amount  = $_POST['Amount'];
$id = $_GET['id'];
$ca = $_GET['ca'];
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'me2020@gmail.com'; //Business Email
$Ca = rand(123456,987654);
if(isset($_POST['Submit']))
    {
         $Ins = "INSERT INTO customer SET CustomerName='$CustomerName',FatherName='$FatherName',DOB='$DOB',Address='$Address',EmailId='$EmailId',MobileNo='$MobileNo',
State='$State',City='$City',PinCode='$PinCode',DelearName='$DelearName',DelearAddress='$DelearAddress',IdProof='$IdProof',AddressProof='$AddressProof',
IdImage='$IdImage',AddressImage='$AddressImage',CustomerId='$Ca',CreateDate=NOW(),Amount='$Amount'"; 
        $Rsc = mysql_query($Ins);
        $lastid = mysql_insert_id();
        if($Rsc)
        {
            header("location:apply-online.php?id=$lastid&ca=$Ca"); 
        }
    }?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title><?php echo $title;?></title>
<?php include("element/css_js.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include("element/header.php"); ?>
  <?php include("element/menu.php"); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1> Customer Detail <small></small> </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
           <h3 class="box-title">Application Form</h3>
             </div>
            <?php
            if($id=='' && $ca=='')
            {?>
            <form name="TaggingPannel" method="post" onSubmit="return TaggingValidate();" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                  <div class="col-sm-2">
                   <input type="text" name="CustomerName" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Father Name</label>
                  <div class="col-sm-2">
                    <div id="SwReason">
                      <input type="text" name="FatherName" value="" class="form-control" required="">
                    </div>
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">DOB</label>
                  <div class="col-sm-2">
                   <input type="text" name="DOB" value="" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-2">
                   <input type="text" name="Address" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">EmailId</label>
                  <div class="col-sm-2">
                   <input type="text" name="EmailId" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">MobileNo</label>
                  <div class="col-sm-2">
                   <input type="text" name="MobileNo" value="" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                  <div class="col-sm-2">
                    <input type="text" name="State" value="" class="form-control" required="">
                     </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                  <div class="col-sm-2">
                    <input type="text" name="City" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">PinCode</label>
                  <div class="col-sm-2">
                   <input type="text" name="PinCode" value="" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">DealerName</label>
                  <div class="col-sm-2">
                   <input type="text" name="CustomerName" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">DelearAddress</label>
                  <div class="col-sm-2">
                   <input type="text" name="DelearAddress" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">IdProof</label>
                  <div class="col-sm-2">
                    <input type="text" name="IdProof" value="" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">AddressProof</label>
                  <div class="col-sm-2">
                    <input type="text" name="AddressProof" value="" class="form-control" required="">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Document 1</label>
                  <div class="col-sm-2">
                   <input type="text" name="Document" value="" class="form-control" required="">
                  </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Document 2</label>
                  <div class="col-sm-2">
                   <input type="text" name="Document2" value="" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                  <div class="col-sm-2">
                    <input type="text" name="Amount" value="2500" class="form-control" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-2"></div>
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-2">
                    <input type="submit" name="Submit" value="Add" class="btn btn-info">
                  </div>
                </div>
              </div>
              <div class="box-footer"> </div>
            </form>
    <?php }
  else { ?>
    <form action="<?php echo $paypalURL; ?>" method="post" class="form-horizontal">
            <!-- Identify your business so that you can collect the payments. -->
            <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
                  <div class="col-sm-2">
                   <input type="text" name="CustomerName" value="Gas connection" class="form-control">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                  <div class="col-sm-2">
                    <div id="SwReason">
                      <input type="text" name="FatherName" value="2500" class="form-control" >
                    </div>
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">DOB</label>
                  <div class="col-sm-2">
                   <input type="text" name="DOB" value="" class="form-control" required="">
                  </div>
                </div>
            <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
            <!-- Specify a Buy Now button. -->
            <input type="hidden" name="cmd" value="_xclick">
            <!-- Specify details about the item that buyers will purchase. -->
            <input type="hidden" name="item_name" value="Gas connection">
            <input type="hidden" name="item_number" value="1">
            <input type="hidden" name="amount" value="2500">
            <input type="hidden" name="currency_code" value="USD">
            <!-- Specify URLs -->
            <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
            <input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
            <!-- Display the payment button. -->
            <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </div>
          </form>
    <?php 
                   } ?>
          </div>
        </div>
         </div>
          </section>
          </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>

