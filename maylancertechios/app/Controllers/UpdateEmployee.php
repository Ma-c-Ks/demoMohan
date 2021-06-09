<?php
namespace App\Controllers;
use App\Models\EmployeeModel;

class UpdateEmployee extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["employeedetails"]=$employeeModel->getEmployee();
        return view('updateEmployeeView',$data);
        
    }
    function submit(){
        $this->validation->setRules([
            'id'=>[
                'label'=>'id',
                'rules'=>'required'
                
            ],

            
        ]);
        
        if ($this->validation->run($_POST)==false) {
            return $this->index();
        }
        
        else {
            
        $id=$this->request->getPost("id");
        $data['empid']=$this->request->getPost("empId");
        $data['machineid']=$this->request->getPost("machineId");
        $data['firstname']=$this->request->getPost("firstName");
        $data['lastname']=$this->request->getPost("lastName");
        $data['qualification']=$this->request->getPost("qualification");
        $data['yearofpassing']=$this->request->getPost("yearofPassing");
        $data['maritalstatus']=$this->request->getPost("maritalStatus");
        $data['bloodgroup']=$this->request->getPost("bloodGroup");
        $data['permanentaddress']=$this->request->getPost("permanentAddress");
        $data['temporaryaddress']=$this->request->getPost("temporaryAddress");
        $data['contactnumber']=$this->request->getPost("contactNumber");
        $data['aadhaarno']=$this->request->getPost("aadhaarNo");
        $data['fathername']=$this->request->getPost("fatherName");
        $data['mothername']=$this->request->getPost("motherName");
        $data['mailid']=$this->request->getPost("mailid");
        $data['shift']=$this->request->getPost("shift");
        $data['jobtitle']=$this->request->getPost("jobTitle");
        $data['accountnumber']=$this->request->getPost("shift");
        $data['ifsccode']=$this->request->getPost("ifscCode");
        
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->updateEmployee($data,$id);
        if($result){
            echo"success updated";
        }
        else{
            echo "failed.Try again";
        }
    }
    }
}