<?php 
namespace App\Controllers;

use App\Models\EmployeeModel;

class ViewTrainingStudent extends BaseController
{
    public function index(){
        $employeeModel=new EmployeeModel();
        $data["trainingstudent"]=$employeeModel->getStudent();
        return view('viewtrainingStudentView',$data);
        
    }
    
    public function submit(){
        $data['name']=$this->request->getPost("studentName");
        
        $data['clgdno']=$this->request->getPost("dNo");
        
        $data['trainingcoursename']=$this->request->getPost("trainingCourseName");
        
        $data['department']=$this->request->getPost("departMent");
        $data['clgname']=$this->request->getPost("collegeName");
        $data['clgaddress']=$this->request->getPost("collegeAddress");
        $data['fathername']=$this->request->getPost("fatherName");
        $data['dateofbirth']=$this->request->getPost("dateOfBirth");
        $data['age']=$this->request->getPost("age");
        $data['aadharcard']=$this->request->getPost("aadharCard");
        $data['photo']=$this->request->getPost("photo");
        $data['joindate']=$this->request->getPost("joinDate");
        $data['studentaddress']=$this->request->getPost("studentAddress");
        $data['phonenumber']=$this->request->getPost("phonenumber");
        $data['email']=$this->request->getPost("eMail");
        
        $employeeModel=new EmployeeModel();
        $result=$employeeModel->getStudent($data,$id);
        
        if($result){
            echo"Successfully Employee Added!";
        }
        else{
            echo "failed";
        }
        
        
    }
    
    
}