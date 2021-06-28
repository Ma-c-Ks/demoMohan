<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class DeleteTrainingStudent extends BaseController
{
    public function index(){
        
        $employeeModel=new EmployeeModel();
        $data["trainingstudent"]=$employeeModel->getStudent();
        
        return view("deleteTrainingStudentView",$data);
        
    }
    
    function submit(){
        $id=$this->request->getPost("id");
        
        
        
        
        
        $employeeModel=new EmployeeModel();
        
        $result= $employeeModel->deleteTrainingStudent($id);
        if($result){
            echo"success delete";
        }
        else{
            echo "failed delete.Try again";
        }
        
    }
        
    }
