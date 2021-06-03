<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>

<div class="container">
<h1>
AddEmployee</h1>
<form action="<?php echo base_url('Addemp/submit')?>" method="post">
<div class="form-group">
Empid:<input type="text" name="empid" class="form-control"><br>

FirstName:<input type="text" name="firstname" class="form-control"><br>
LastName:<input type="text" name="lastname" class="form-control"><br>
Qualification:<input type="text" name="qualification" class="form-control"><br>
YearofPassing:<input type="text" name="yearofpassing" class="form-control"><br>
BloodGroup:<input type="text" name="bloodgroup" class="form-control"><br>
Permanentaddress:<input type="text" name="permanentaddress" class="form-control"><br>
TemporaryAddress:<input type="text" name="temporaryaddress" class="form-control"><br>
ContactNumber:<input type="text" name="contactnumber" class="form-control"><br>
AadhaarNo:<input type="text" name="aadhaarno" class="form-control"><br>
FatherName:<input type="text" name="fathername" class="form-control"><br>
MotherName:<input type="text" name="mothername" class="form-control"><br>
Mailid:<input type="text" name="mailid" class="form-control"><br>
Shift:<input type="text" name="shift" class="form-control"><br>
JobTitle:<input type="text" name="jobtitle" class="form-control"><br>
AccountNumber:<input type="text" name="accountnumber" class="form-control"><br>
IfscCode:<input type="text" name="ifsccode" class="form-control"><br>

        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>

</body>
</html>