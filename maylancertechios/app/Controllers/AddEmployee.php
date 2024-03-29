<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class AddEmployee extends BaseController{
    public function index(){
        return view('addEmployeeView');
    }
    public function submit(){
        
        $this->validation->setRules([
            'firstName'=>[
                'label'=>'FirstName',
                'rules'=>'required|min_length[2]|max_length[20]'
              
            ],
            
            
            
            'lastName'=>[
                'label'=>'LastName',
                'rules'=>'required|min_length[2]|max_length[20]|differs[firstName]'
            ],
            
            'qualification'=>[
                'label'=>'Qualification',
                'rules'=>'required|min_length[2]|max_length[20]|is_not_unique[employeedetails.qualification]'
            ],
         
            'yearOfPassing'=>[
                'label'=>'yearOfPassing',
                'rules'=>'required'
            ],
            
            'bloodGroup'=>[
                'label'=>'BloodGroup',
                'rules'=>'required|min_length[2]|max_length[20]'
            ],
            
            'permanentAddress'=>[
                'label'=>'PermanentAddress',
                'rules'=>'required|min_length[2]|max_length[20]'
            ],
            
            'temporaryAddress'=>[
                'label'=>'?TemporaryAddress',
                'rules'=>'required|min_length[2]|max_length[20]'
            ],
            
            'contactNumber'=>[
                'label'=>'ContactNumber',
                'rules'=>'required|min_length[10]|max_length[12]'
            ],
            
            'aadhaarNo'=>[
                'label'=>'AadhaarNo',
                'rules'=>'required|min_length[10]'
            ],
            
            'fatherName'=>[
                'label'=>'FatherName',
                'rules'=>'required'
            ],
            
            'motherName'=>[
                'label'=>'MotherName',
                'rules'=>'required'
            ],
            
            'mailId'=>[
                'label'=>'MailId',
                'rules'=>'required|valid_email'
                
            ],
            
            'shift'=>[
                'label'=>'Shift',
                'rules'=>'required'
            ],
            
            'jobTitle'=>[
                'label'=>'JobTitle',
                'rules'=>'required'
            ],
            
            'accountNumber'=>[
                'label'=>'AccountNumber',
                'rules'=>'required'
            ],  
            
            'ifscCode'=>[
                'label'=>'IfscCode',
                'rules'=>'required|min_length[5]'
            ],  
            
            'employeeId'=>[
                'label'=>'EmployeeId',
                'rules'=>'required'
            ],
            
        ]);
            
            if ($this->validation->run($_POST)==false) {
                return $this->index();
            }
            
            else {
                $data['empid']=$this->request->getPost("employeeId");
                
                $data['machineid']=$this->request->getPost("machineId");
                
                $data['firstname']=$this->request->getPost("firstName");
                $data['lastname']=$this->request->getPost("lastName");
                $data['qualification']=$this->request->getPost("qualification");
                $data['yearofpassing']=$this->request->getPost("yearOfPassing");
                
                $data['maritalstatus']=$this->request->getPost("maritalStatus");
                
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
                
                $empModel=new EmployeeModel();
                $result=$empModel->AddEmployee($data);
                
                if($result){
                    echo"Successfully Employee Added!";
                }
                else{
                    echo "failed";
                }
                
                
            }        
    
       
    }
}
