<?php
namespace App\Controllers;
use App\Models\EmployeeModel;

class Updateemp extends BaseController
{
    public function index(){
        $empmodel=new EmployeeModel();
        $data["employeedetails"]=$empmodel->getEmp();
        return view('updateEmp',$data);
        
    }
    function submit(){
        $id=$this->request->getPost("id");
        $data['empid']=$this->request->getPost("empid");
        $data['firstname']=$this->request->getPost("firstname");
        $data['lastname']=$this->request->getPost("lastname");
        $data['qualification']=$this->request->getPost("qualification");
        $data['yearofpassing']=$this->request->getPost("yearofpassing");
        $data['bloodgroup']=$this->request->getPost("bloodgroup");
        $data['permanentaddress']=$this->request->getPost("permanentaddress");
        $data['temporaryaddress']=$this->request->getPost("temporaryaddress");
        $data['contactnumber']=$this->request->getPost("contactnumber");
        $data['aadhaarno']=$this->request->getPost("aadhaarno");
        $data['fathername']=$this->request->getPost("fathername");
        $data['mothername']=$this->request->getPost("mothername");
        $data['mailid']=$this->request->getPost("mailid");
        $data['shift']=$this->request->getPost("shift");
        $data['jobtitle']=$this->request->getPost("jobtitle");
        $data['accountnumber']=$this->request->getPost("shift");
        $data['ifsccode']=$this->request->getPost("ifsccode");
        
        $empModel=new EmployeeModel();
        $result=$empModel->updateEmp($data,$id);
        if($result){
            echo"success updated";
        }
        else{
            echo "failed.Try again";
        }
    }
}