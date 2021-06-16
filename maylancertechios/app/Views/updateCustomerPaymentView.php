<html>
<head>
<?php require 'link_view.php';?>
</head>
<body>
<?php require 'menuview.php';?>
<div class="container">
<h1>
Uppdate Customer payment</h1>
<form action="<?php echo base_url('updatePaymentCustomer/submit')?>" method="post">
<div class="form-group">
InvoiceNumber:<input type="text" name="invoiceNumber" class="form-control"><br>
date:<input type="date" name="date" class="form-control"><br>
PaymentType:<input type="text" name="paymentType" class="form-control"><br>
Payment:<input type="text" name="payment" class="form-control"><br>

<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
<?php if($payment!=null){?>
<table class="table table-dark">
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