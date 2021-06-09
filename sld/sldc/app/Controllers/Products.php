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
	
	function product($id=''){
	    $productsModel=new ProductsModel();
	    $data['product']=$productsModel->getProduct($id);
	    return view('productView',$data);
	}
}
