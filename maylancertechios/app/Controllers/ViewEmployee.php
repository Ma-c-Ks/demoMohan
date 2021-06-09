<?php
namespace App\Controllers;


use App\Models\EmployeeModel;

class ViewEmployee extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["employeedetails"]=$employeeModel->getEmployee();
        return view('viewEmployeeView',$data);
        
    }
    public function submit(){
        $id=$this->request->getPost("id");
        $data['empid']=$this->request->getPost("empId");
        $data['firstname']=$this->request->getPost("firstName");
        $data['lastname']=$this->request->getPost("lastName");
        $data['qualification']=$this->request->getPost("qualification");
        $data['yearofpassing']=$this->request->getPost("yearofPassing");
        $data['bloodgroup']=$this->request->getPost("bloodGroup");
        $data['permanentaddress']=$this->request->getPost("permanentAddress");
        $data['temporaryaddress']=$this->request->getPost("temporaryAddress");
        $data['contactnumber']=$this->request->getPost("contactNumber");
        $data['aadhaarno']=$this->request->getPost("aadhaarNo");
        $data['fathername']=$this->request->getPost("fatherName");
        $data['mothername']=$this->request->getPost("motherName");
        $data['mailid']=$this->request->getPost("mailId");
        $data['shift']=$this->request->getPost("shift");
        $data['jobtitle']=$this->request->getPost("jobTitle");
        $data['accountnumber']=$this->request->getPost("accountNumber");
        $data['ifsccode']=$this->request->getPost("ifscCode");
        
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->getEmployee($data,$id);
        
        if($result){
            echo"Successfully Employee Added!";
        }
        else{
            echo "failed";
        }
        
    }
    
}
    