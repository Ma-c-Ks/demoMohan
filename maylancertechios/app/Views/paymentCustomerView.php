<?php
use Config\Services;
?>
<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>

<div class="container">
<h1>
Customer Payment</h1>                
                   

<form id="test-form" >

<div class="popup_box ">
 <div class="popup_inner">          
 <form action="<?php echo base_url('paymentcustomer/submit')?>" method="post">
   <div class="row">
 <div class="col-xl-6">
Invoice Number:<input type="text" name="invoiceNumber" class="form-control"><br>
</div>
<div class="col-xl-6">
Date:<input type="date" name="date" class="form-control"><br>
</div>
<div class="col-xl-6">
Payment Type:<br>
<input type="radio" name="payMentType" value="cash">Cash<br>
<input type="radio" name="payMentType" value="check">Check<br>
</div>
<div class="col-xl-6">
Payment:<input type="text" name="payMent"class="form-control"><br>
</div>
 <div class="col-xl-12">
<input type="submit" name="submit" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
</form>
</div>

</body>
</html>