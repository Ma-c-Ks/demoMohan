<?php
namespace App\Controllers;

use app\Models\EmployeeModel;

class PaymentTrainingStudent extends BaseController{
    public function index(){
        return view('paymentTrainingStudentView');
    }
    public function submit(){
        $data['name']=$this->request->getPost("name");
        $data['date']=$this->request->getPost("date");
        $data['paymenttype']=$this->request->getPost("payMentType");
        $data['payment']=$this->request->getPost("payMent");
        
        $empModel=new EmployeeModel();
        $result=$empModel->trainingStudentPayment($data);
        
        if($result){
            echo"Successfully Payment Added!";
        }
        else{
            echo "failed.Try Now!";
        }
        
    }
}