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
Add TrainingStudent </h1>
<form action="<?php echo base_url('addtrainingstudent/submit')?>" method="post">
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
</body>
</html>






