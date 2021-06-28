<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
View Customer</h1>
<?php if($customerdetails!=null){?>
<table class="table table-light">
<tr class="table-primary">
<th>id</th>
<th>companyname</th>
<th>gstno</th>
<th>companyaddress</th>
<th>emailid</th>
<th>contactus</th>
<th>attachfile</th>
<th>invoicenumber</th>
<th>summaryofpraject</th>
</tr>
<?php foreach ($customerdetails as $row){?>
<tr>
<td><?php echo $row->id?></td>
<td><?php echo $row->companyname?></td>
<td><?php echo $row->emailid?></td>
<td><?php echo $row->contactus?></td>
<td><?php echo $row->attachfile?></td>
<td><?php echo $row->invoicenumber?></td>
<td><?php echo $row->summaryofpraject?></td>
</tr>
<?php }?>
</table>
<?php } ?>
</body>
</html>