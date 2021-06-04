<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>

<div class="container">
<h1>
Uppdate Employee</h1>
<form action="<?php echo base_url('Updateemployee/submit')?>" method="post">
<div class="form-group">
id:<input type="text" name="id" class="form-control"><br>

Employee id:<input type="text" name="empid" class="form-control"><br>

First Name:<input type="text" name="firstName" class="form-control"><br>
Last Name:<input type="text" name="lastName" class="form-control"><br>
Qualification:<input type="text" name="qualification" class="form-control"><br>
Yearof Passing:<input type="text" name="yearofPassing" class="form-control"><br>
Blood Group:<input type="text" name="bloodGroup" class="form-control"><br>
Permanent Address:<input type="text" name="permanentAddress" class="form-control"style="height:120px; width:1100px";><br>
Temporary Address:<input type="text" name="temporaryAddress" class="form-control"style="height:120px; width:1100px";><br>
Contact Number:<input type="text" name="contactNumber" class="form-control"><br>
Aadhaar No:<input type="text" name="aadhaarNo" class="form-control"><br>
Father Name:<input type="text" name="fatherName" class="form-control"><br>
Mother Name:<input type="text" name="motherName" class="form-control"><br>
Mailid:<input type="text" name="mailid" class="form-control"><br>
Shift:<input type="text" name="shift" class="form-control"><br>
Job Title:<input type="text" name="jobTitle" class="form-control"><br>
Accoun tNumber:<input type="text" name="accountNumber" class="form-control"><br>
Ifsc Code:<input type="text" name="ifscCode" class="form-control"><br>
 <input class="form-check-input" type="checkbox" name="remember"> Remember me
      
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
<?php if($employeedetails!=null){?>
<table class="table table-dark">
<tr class="table-primary">
<th>id</th>
<th>empid</th>
<th>firstname</th>
<th>lastname</th>
<th>qualification</th>
<th>yearofpassing</th>
<th>bloodgroup</th>
<th>permanentaddress</th>
<th>temporaryaddress</th>
<th>contactnumber</th>
<th>aadhaarno</th>
<th>fathername</th>
<th>mothername</th>
<th>mailid</th>
<th>shift</th>
<th>jobtitle</th>
<th>accountnumber</th>
<th>ifsccode</th>


</tr>
<?php foreach ($employeedetails as $row){?>
<tr>
<td><?php echo $row->id?></td>
<td><?php echo $row->empid?></td>

<td><?php echo $row->firstname?></td>
<td><?php echo $row->lastname?></td>
<td><?php echo $row->qualification?></td>
<td><?php echo $row->yearofpassing?></td>
<td><?php echo $row->bloodgroup?></td>
<td><?php echo $row->permanentaddress?></td>
<td><?php echo $row->temporaryaddress?></td>
<td><?php echo $row->contactnumber?></td>
<td><?php echo $row->aadhaarno?></td>
<td><?php echo $row->fathername?></td>
<td><?php echo $row->mothername?></td>
<td><?php echo $row->mailid?></td>
<td><?php echo $row->shift?></td>
<td><?php echo $row->jobtitle?></td>
<td><?php echo $row->accountnumber?></td>
<td><?php echo $row->ifsccode?></td>


</tr>
<?php }?>

</table>

<?php } ?>

</body>
</html>