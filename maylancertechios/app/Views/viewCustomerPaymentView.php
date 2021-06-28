<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
View Customer Payment</h1>
<?php if($payment!=null){?>
<table class="table table-light">
<tr class="table-primary">
<th>invoicenumber</th>
<th>date</th>
<th>paymenttype</th>
<th>payment</th>
</tr>
<?php foreach ($payment as $row){?>
<tr>
<td><?php echo $row->invoicenumber?></td>
<td><?php echo $row->date?></td>
<td><?php echo $row->paymenttype?></td>
<td><?php echo $row->payment?></td>
</tr>
<?php }?>
</table>
<?php } ?>
</body>
</html>
