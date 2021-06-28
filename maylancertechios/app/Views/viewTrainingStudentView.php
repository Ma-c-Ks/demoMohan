<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
View TrainingStudent</h1>
<?php if($trainingstudent!=null){?>
<table class="table table-light">
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