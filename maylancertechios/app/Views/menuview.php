 <div class="menu_wrap_inner d-flex align-items-center ">

<nav class="navbar navbar-expand-sm bg-light menu_wrap">    
 
  <ul class="navbar-nav">
  
  <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
  
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Employee
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>/addEmployee">AddEmp</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/updateEmployee">update Employee</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/deleteEmployee">DeleteEmp</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/viewEmployee">viewEmp</a>
      </div>
    </li>
    
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Customer
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>/addCustomer">Add Customer</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/updateCustomer">update Customer</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/deleteCustomer">Delete Customer</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/viewCustomer">view Customer</a>
      </div>
    </li>
    
    
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Training 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>/addTrainingStudent">Add TrainingStudent</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/updateTrainingStudent">update TrainingStudent</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/deleteTrainingStudent">Delete TrainingStudent</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/viewTrainingStudent">view TrainingStudent</a>
      </div>
    </li>
    
    
    
    
    
    <li class="nav-item dropdown"  >
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Payment
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>/paymentCustomer">Customer Payment</a>
        <a class="dropdown-item" href="<?php echo base_url()?>/updatePaymentCustomer">update Customer Payment</a>
               <a class="dropdown-item" href="<?php echo base_url()?>/viewCustomerPayment">view Customer Payment</a>
      </div>
    </li>
    
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Training Student Payment
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>/paymentTrainingStudent">Training Student Payment</a>
        <a class="dropdown-item" href="">update Training Student Payment</a>
        <a class="dropdown-item" href="">view Training Student Payment</a>
      </div>
    </li>
    
    
    </ul>
</nav>
</div>