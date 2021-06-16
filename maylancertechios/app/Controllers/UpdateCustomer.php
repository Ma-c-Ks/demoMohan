<?php
namespace App\Controllers;
use App\Models\EmployeeModel;

class UpdateCustomer extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["customerdetails"]=$employeeModel->getCustomer();
        return view('updateCustomerView',$data);
        
    }
    function submit(){
        $id=$this->request->getPost("id");
        $data['companyname']=$this->request->getPost("companyName");
        $data['gstno']=$this->request->getPost("gstNo");
        $data['companyaddress']=$this->request->getPost("companyAddress");
        $data['emailid']=$this->request->getPost("emailId");
        $data['contactus']=$this->request->getPost("contactUs");
        $data['attachfile']=$this->request->getPost("attachFile");
      
        $data['summaryofpraject']=$this->request->getPost("summaryOfPraject");
        
        $data['invoicenumber']=$this->request->getPost("invoiceNumber");
                
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->updateCustomer($data,$id);
        if($result){
            echo"success updated";
        }
        else{
            echo "failed.Try again";
        }          
                
    }
}