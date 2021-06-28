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
Student Payment</h1>                
                   

       
<form action="<?php echo base_url('paymenttrainingstudent/submit')?>" method="post">
  
Name:<input type="text" name="name" class="form-control"><br>

Date:<input type="date" name="date" class="form-control"><br>

Payment Type:<br>
<input type="radio" name="payMentType" value="cash">Cash<br>
<input type="radio" name="payMentType" value="check">Check<br>


Payment:<input type="text" name="payMent"class="form-control"><br>

 <input type="submit" name="submit" class="btn btn-primary">
</div>
</form>


</body>
</html>