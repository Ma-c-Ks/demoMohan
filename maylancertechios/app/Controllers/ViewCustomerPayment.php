<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class ViewCustomerPayment extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["payment"]=$employeeModel->getpayment();
        return view('viewCustomerPaymentView',$data);
        
    }
    public function submit(){
        
        $invoicenumber=$this->request->getPost("invoiceNumber");
        $detail['date']=$this->request->getPost("date");
        $detail['paymenttype']=$this->request->getPost("payMentType");
        $detail['payment']=$this->request->getPost("payMent");
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->getCustomer($detail,$invoicenumber);
        
        if($result){
            echo"Successfully Employee Added!";
        }
        else{
            echo "failed";
        }
        
        
            }
}