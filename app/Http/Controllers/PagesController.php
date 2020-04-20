<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//App\product;

class PagesController extends Controller

{
  


    public function index()
    {
    	return view("pages.index");  //home page All Products
    }



            public function contact()
    {
        return view("pages.contact");  //contact page
    }


              public function products()
    {
    
        return view("pages.product.index");  //Products page
    }

    /*
                  public function products()
    {
        $products=product::orderBy('id','desc')->get();
        return view("pages.product.index")->with('products',$products);  //Products page
    }
*/
}