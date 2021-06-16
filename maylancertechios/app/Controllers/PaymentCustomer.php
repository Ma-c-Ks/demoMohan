<?php
namespace App\Controllers;


use App\Models\EmployeeModel;

class PaymentCustomer extends BaseController{
    public function index(){
        return view('paymentCustomerView');
    }
    public function submit(){
        $detail['invoicenumber']=$this->request->getPost("invoiceNumber");
        $detail['date']=$this->request->getPost("date");
        $detail['paymenttype']=$this->request->getPost("payMentType");
        $detail['payment']=$this->request->getPost("payMent");      
        
        $empModel=new EmployeeModel();
        $result=$empModel->customerpayment($detail);
        
        if($result){
            echo"Successfully Payment Added!";
        }
        else{
            echo "failed.Try Now!";
        }          
        
    }
}