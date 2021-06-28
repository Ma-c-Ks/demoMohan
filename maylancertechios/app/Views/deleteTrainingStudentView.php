<html>
<head>
<?php require 'link_view.php';?>
<?php $validation= \Config \Services::validation();?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
Delete TrainingStudent</h1>
<form action="<?php echo base_url('deletetrainingstudent/submit')?>" method="post">
<div class="form-group">
ID:<input type="text" name="id" class="form-control">
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>


<?php if($trainingstudent!=null){?>
<div class="container">
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