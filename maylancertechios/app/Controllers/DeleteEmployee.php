<?php
namespace App\Controllers;


use App\Models\EmployeeModel;

class DeleteEmployee extends BaseController
{
    public function index(){       
        
        $employeeModel=new EmployeeModel();
        $data["employeedetails"]=$employeeModel->getEmployee();
      
        return view("deleteEmployeeView",$data);
        
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
        $employeeModel=new EmployeeModel();
        
        $result= $employeeModel->deleteEmployee($id);
        if($result){
            echo"success delete";
        }
        else{
            echo "failed delete.Try again";
        }
        
    }
    }
}