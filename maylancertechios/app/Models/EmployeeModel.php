<?php
namespace app\Models;
use CodeIgniter\Model;
class EmployeeModel extends Model
{
    function AddEmployee($data){
        $builder=$this->db->table("employeedetails");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    function getEmployee(){
        $builder=$this->db->table("employeedetails");
        $query=$builder->get();
        
        if(count($query->getResult())>=1){
            return $query->getResult();
            
        }else{
            return null;
        }
    }
    function deleteEmployee($id){
        $builder=$this->db->table("employeedetails");
        $builder->where("id",$id);
        $query=$builder->delete($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    function updateEmployee($data,$id){
        $builder=$this->db->table("employeedetails");
        $builder->where("id",$id);
        $query=$builder->update($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function AddCustomer($data){
        $builder=$this->db->table("customerdetails");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function getCustomer(){
        $builder=$this->db->table("customerdetails");
        $query=$builder->get();
        
        if(count($query->getResult())>=1){
            return $query->getResult();
            
        }else{
            return null;
        }
    }
    
    function updateCustomer($data,$id){
        $builder=$this->db->table("customerdetails");
        $builder->where("id",$id);
        $query=$builder->update($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function customerpayment($detail){
        $builder=$this->db->table("payment");
        $query=$builder->insert($detail);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    
    function getpayment(){
        $builder=$this->db->table("payment");
        $query=$builder->get();
        
        if(count($query->getResult())>=1){
            return $query->getResult();
            
        }else{
            return null;
        }
    }
    
    
    function updateCustomerPayment($detail,$invoicenumber){
        $builder=$this->db->table("payment");
        $builder->where("invoicenumber",$invoicenumber);
        $query=$builder->update($detail);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    
    
    function AddTrainingStudent($data){
        $builder=$this->db->table("trainingstudent");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    
    function getStudent(){
        $builder=$this->db->table("trainingstudent");
        $query=$builder->get();
        
        if(count($query->getResult())>=1){
            return $query->getResult();
            
        }else{
            return null;
        }
    }
    
    
    function updateTrainingStudent($data,$id){
        $builder=$this->db->table("trainingstudent");
        $builder->where("id",$id);
        $query=$builder->update($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function deleteTrainingStudent($id){
        $builder=$this->db->table("trainingstudent");
        $builder->where("id",$id);
        $query=$builder->delete($id);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    
    function trainingStudentPayment($data){
        $builder=$this->db->table("trainingstudentpayment");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function AddBill($data){
        $builder=$this->db->table("accounts");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
    
    function getBill(){
        $builder=$this->db->table("accounts");
        $query=$builder->get();
        
        if(count($query->getResult())>=1){
            return $query->getResult();
            
        }else{
            return null;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}