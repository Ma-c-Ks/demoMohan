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
Add Customer</h1>


<form action="<?php echo base_url('addcustomer/submit')?>" method="post">

Customer Name:<input type="text" name="customerName" class="form-control"><br>
Praject Name:<input type="text" name="prajectName" class="form-control"><br>
Company Name:<input type="text" name="companyName" class="form-control"><br>
Gst No:<input type="text" name="gstNo" class="form-control"><br>
Company Address:<input type="text" name="companyAddress" class="form-control"><br>
Email Id:<input type="text" name="emailId" class="form-control"><br>
Contact Us:<input type="text" name="contactUs" class="form-control"><br>
Attach File:<br><input type="file" name="attachFile"><br>
Summary Of Praject:<br><input type="text" name="summaryOfPraject"><br>
Invoice Number:<input type="text" name="invoiceNumber" class="form-control"><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
</body>
</html>






