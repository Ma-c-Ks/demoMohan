<?php namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model{
   
    function getProductsCategory(){
        $builder=$this->db->table("productcategories");
        $query=$builder->get();
        if(count($query->getResult())>=1){
            return $query->getResult();
        }else{
            return null;
        }
    }
    
    function getCategoryProducts($category){
        $builder=$this->db->table("products");
        $builder->where("category",$category);
        $builder->where("subcategory","");
        $builder->orderBy("productname","ASC");
        $query=$builder->get();
        if(count($query->getResult())>=1){
            return $query->getResult();
        }else{
            return null;
        }
    }
    
    function getSubCategoryProducts($subCategory){
        $builder=$this->db->table("products");
        $builder->where("subcategory",$subCategory);
        $builder->orderBy("productname","ASC");
        $query=$builder->get();
        if(count($query->getResult())>=1){
            return $query->getResult();
        }else{
            return null;
        }
    }
    
    function getProduct($id){
        $builder=$this->db->table("products");
        $builder->where("id",$id);
        $query=$builder->get();
        if(count($query->getResult())>=1){
            return $query->getResult();
        }else{
            return null;
        }
    }
}
