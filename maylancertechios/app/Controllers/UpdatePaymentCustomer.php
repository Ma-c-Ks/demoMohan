<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class UpdatePaymentCustomer extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $detail["payment"]=$employeeModel->getpayment();
        return view('updateCustomerPaymentView',$detail);
        
    }
    function submit(){
        $invoicenumber=$this->request->getPost("invoicenumber");
        $detail['date']=$this->request->getPost("date");
        $detail['paymenttype']=$this->request->getPost("paymenttype");
        $detail['payment']=$this->request->getPost("payment");
        
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->updateCustomerPayment($detail,$invoicenumber);
        if($result){
            echo"success updated";
        }
        else{
            echo "failed.Try again";
        }
        
    }
}