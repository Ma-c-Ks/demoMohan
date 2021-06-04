<?php
use Config\Services;
?>
<html>
<head>
<?php $validation= \Config \Services::validation();?>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>

<div class="container">
<h1>
Add Employee</h1>
<form action="<?php echo base_url('addemployee/submit')?>" method="post">
<div class="form-group">
Employee Id:<input type="text" name="employeeId" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("employeeId")?></span><br>

First Name:<input type="text" name="firstName" class="form-control"><br>
<span class="text-danger" role="alert"><?php echo $validation->getError("firstName")?></span><br>


Last Name:<input type="text" name="lastName" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("lastName")?></span><br>

Qualification:<input type="text" name="qualification" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("qualification")?></span><br>

Year of Passing:<input type="text" name="yearOfPassing" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("yearofPassing")?></span><br>

Blood Group:<input type="text" name="bloodGroup" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("bloodGroup")?></span><br>

Permanent Address:<input type="text" name="permanentAddress" class="form-control" style="height:120px; width:1100px";><br>
<span class="text-danger"><?php echo $validation->getError("permanentAddress")?></span><br>

Temporary Address:<input type="text" name="temporaryAddress" class="form-control"style="height:120px; width:1100px";><br>
<span class="text-danger"><?php echo $validation->getError("temporaryAddress")?></span><br>

Contact Number:<input type="text" name="contactNumber" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("contactNumber")?></span><br>

Aadhaar No:<input type="text" name="aadhaarNo" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("aadhaarNo")?></span><br>

Father Name:<input type="text" name="fatherName" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("fatherName")?></span><br>

Mother Name:<input type="text" name="motherName" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("motherName")?></span><br>

Mailid:<input type="text" name="mailId" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("mailId")?></span><br>

Shift:<input type="text" name="shift" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("shift")?></span><br>

JobTitle:<input type="text" name="jobTitle" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("jobTitle")?></span><br>

Account Number:<input type="text" name="accountNumber" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("accountNumber")?></span><br>

Ifsc Code:<input type="text" name="ifscCode" class="form-control"><br>
<span class="text-danger"><?php echo $validation->getError("ifscCode")?></span><br>

<input class="form-check-input" type="checkbox" name="remember"> Remember me
      
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>

</body>
</html>