<?php
namespace app\Models;
use CodeIgniter\Model;
class EmployeeModel extends Model
{
    function Emp($data){
        $builder=$this->db->table("employeedetails");
        $query=$builder->insert($data);
        if($this->db->affectedRows()==1){
            return true;
            
        }else{
            return false;
        }
    }
}