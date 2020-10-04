<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function Add(){
    	return view('admin.Add');
    }

    public function All(){
    	$allcp = DB::table('tbl_category_product')->get();
    	$managecp = view('admin.All')->with('lmao',$allcp);
    	return view('admin_layout')->with('admin.All',$managecp);
	}


	//INSERT DATA
	public function Save(Request $request){
		$data = array();
		$data['category_name'] 		= $request->category_product_name;
		$data['category_desc'] 		= $request->category_product_desc;
		$data['category_status']	= $request->category_product_status;
	
		DB::table('tbl_category_product')->insert($data);
		Session::put('message','thêm danh mục sản phẩm thành công');
		return Redirect::to('add_category_product');//quay về giao diện quản lí

	}
}