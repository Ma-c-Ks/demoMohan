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
Update TrainingStudent </h1>
<form action="<?php echo base_url('addtrainingstudent/submit')?>" method="post">
Id:<input type="text" name="id" class="form-control"><br>

Student Name:<input type="text" name="studentName" class="form-control"><br>

<lable>Training Course Name:</lable><br>
<input type="radio" name="trainingCourseName" value="Python">Python<br>
<input type="radio" name="trainingCourseName" value="Webdevelopment">WebDevelopment<br>
<input type="radio" name="trainingCourseName" value="Java">Java<br>
<input type="radio" name="trainingCourseName" value="MobileAppDevelopment">MobileAppDevelopment<br>



College D.No:<input type="text" name="dNo" class="form-control"><br>
Department:<input type="text" name="departMent" class="form-control"><br>
College Name:<input type="text" name="collegeName" class="form-control"><br>
College Address:<input type="text" name="collegeAddress" class="form-control"><br>
Father Name:<input type="text" name="fatherName" class="form-control"><br>
Date of Birth:<input type="text" name="dateOfBirth" class="form-control"><br>
Age:<input type="text" name="age" class="form-control"><br>
Aadhar Card:<br><input type="file" name="aadharCard"><br>
Photo:<br><input type="file" name="photo" ><br>
Join Date:<input type="date" name="joinDate" class="form-control"><br>
Student Address:<br><input type="text" name="studentAddress" class="form-control"><br>
Phone Number:<br><input type="text" name="phonenumber" class="form-control"><br>
Email Id:<br><input type="text" name="eMail" class="form-control"><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>


<?php if($trainingstudent!=null){?>
<<div class="container">
<table class="table table-dark">
<tr class="table-primary">
<th>id</th>
<th>name</th>
<th>clgdno</th>
<th>trainingcoursename</th>
<th>department</th>
<th>clgname</th>
<th>clgaddress</th>
<th>fathername</th>
<th>dateofbirth</th>

<th>age</th>
<th>aadharcard</th>
<th>photo</th>
<th>joindate</th>
<th>studentaddress</th>
<th>phonenumber</th>
<th>email</th>



</tr>
<?php foreach ($trainingstudent as $row){?>
<tr>
<td><?php echo $row->id?></td>
<td><?php echo $row->name?></td>
<td><?php echo $row->clgdno?></td>
<td><?php echo $row->trainingcoursename?></td>
<td><?php echo $row->department?></td>
<td><?php echo $row->clgname?></td>
<td><?php echo $row->clgaddress?></td>
<td><?php echo $row->fathername?></td>
<td><?php echo $row->dateofbirth?></td>
<td><?php echo $row->age?></td>
<td><?php echo $row->aadharcard?></td>
<td><?php echo $row->photo?></td>
<td><?php echo $row->joindate?></td>
<td><?php echo $row->studentaddress?></td>
<td><?php echo $row->phonenumber?></td>
<td><?php echo $row->email?></td>

</tr>
<?php }?>
</table>
<?php } ?>
</div>
</body>
</html>
