<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController
{
	public function index()
	{
	    $productsModel=new ProductsModel();
	    $data['category']=$productsModel->getProductsCategory();
		return view('productsView',$data);
	}
	
	function category($category=''){
	    $productsModel=new ProductsModel();
	    $data['category']=$category;
	    $data['categoryProduct']=$productsModel->getCategoryProducts($category);
	    return view('productsCategoryView',$data);
	}
	
	function subCategory($category='',$subCategory=''){
	    $productsModel=new ProductsModel();
	    $data['category']=$category;
	    $data['subCategory']=$subCategory;
	    $data['categoryProduct']=$productsModel->getSubCategoryProducts(urldecode($subCategory));
	    return view('productsSubCategoryView',$data);
	}
	
	
}
