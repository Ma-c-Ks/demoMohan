<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<h1>
View employee</h1>

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
