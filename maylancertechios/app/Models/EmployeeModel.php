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
    
}