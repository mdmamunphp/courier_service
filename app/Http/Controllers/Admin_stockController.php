<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\investment;
use App\Merchandise_product;
use App\Merchandise_product_detail;
use App\product_return_item;
use App\product_hold_item;
//images upload
use Illuminate\Http\UploadedFile;


class Admin_stockController extends Controller
{
    
    public function index()
    {
        //
    }

public function add_return(Request $request){
    $result=new product_return_item();
    $result->name=$request->name;
    $result->save();
    return redirect()->back()->with('success', 'Product added to cart successfully!');

}

    public function return()
    {
        $result=DB::select("select * from product_return_items");

        return view('admin.add_return_items', compact('result'));
    }


    public function add_hold(Request $request){
        $result=new product_hold_item();
        $result->name=$request->name;
        $result->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    
    }
    
        public function hold()
        {
            $result=DB::select("select * from product_hold_items");
    
            return view('admin.add_hold_items', compact('result'));
        }
    


    public function create()
    {
        //
    }
    public function product_hold_list()
    {
        $result=DB::select("select * from merchandise_product_details  where delivery_status='2' order by id desc");
        //  print_r($result);
          // return response()->json($result);
      
          //  die();
        //  $return=Product_return_item::all();   
          $return=DB::select("select * from product_return_items");    
          
          return view("admin.product_hold_list", compact('result','return'));

    }
   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
