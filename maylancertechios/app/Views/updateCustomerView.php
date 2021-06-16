<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
Uppdate Customer</h1>
<form action="<?php echo base_url('updatecustomer/submit')?>" method="post">
<div class="form-group">
Id:<input type="text" name="id" class="form-control"><br>
Company Name:<input type="text" name="companyName" class="form-control"><br>
Gst No:<input type="text" name="gstNo" class="form-control"><br>
Company Address:<input type="text" name="companyAddress" class="form-control"><br>
Email Id:<input type="text" name="emailId" class="form-control"><br>
Contact Us:<input type="text" name="contactUs" class="form-control"><br>
Attach File:<br><input type="file" name="attachFile"><br>
Invoice Number:<br><input type="text" name="invoiceNumber" class="form-control"><br>
Summary Of Praject:<br><input type="text" name="summaryOfPraject" class="form-control"><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
<?php if($customerdetails!=null){?>
<table class="table table-dark">
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