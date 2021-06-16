<?php 
namespace App\Controllers;

use App\Models\EmployeeModel;

class ViewCustomer extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["customerdetails"]=$employeeModel->getCustomer();
        return view('viewCustomerView',$data);
        
    }
    
    public function submit(){
        
        $id=$this->request->getPost("id");
        
        $data['companyname']=$this->request->getPost("companyName");
        $data['gstno']=$this->request->getPost("gstNo");
        $data['companyaddress']=$this->request->getPost("companyAddress");
        $data['emailid']=$this->request->getPost("emailId");
        $data['contactus']=$this->request->getPost("contactUs");
        $data['attachfile']=$this->request->getPost("attachFile");
        $data['paymentdetails']=$this->request->getPost("paymentDetails");
        $data['summaryofpraject']=$this->request->getPost("summaryOfPraject");
        
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->getCustomer($data,$id);
        
        if($result){
            echo"Successfully Employee Added!";
        }
        else{
            echo "failed";
        }
        
        
        
    }
}
