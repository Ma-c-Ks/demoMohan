<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class AddCustomer extends BaseController{
    public function index(){
        return view('addCustomerView');
    }
    public function submit(){
        $data['customername']=$this->request->getPost("customerName");
        $data['prajectname']=$this->request->getPost("prajectName");
        $data['companyname']=$this->request->getPost("companyName");
        $data['gstno']=$this->request->getPost("gstNo");
        $data['companyaddress']=$this->request->getPost("companyAddress");
        $data['emailid']=$this->request->getPost("emailId");
        $data['contactus']=$this->request->getPost("contactUs");
        $data['attachfile']=$this->request->getPost("attachFile");
        $data['summaryofpraject']=$this->request->getPost("summaryOfPraject");
        $data['invoicenumber']=$this->request->getPost("invoiceNumber");        
        $empModel=new EmployeeModel();
        $result=$empModel->AddCustomer($data);
        
        if($result){
            echo"Successfully Customer Added!";
        }
        else{
            echo "failed";
        }         
    
    
    }
    
}