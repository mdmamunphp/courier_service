<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
// use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 
use App\Purchaseinvoice;
use App\User;
use App\Merchandise_product;
use App\Merchandise_product_detail;

//images upload
use Illuminate\Http\UploadedFile;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id=session('sess_user_id');
        // echo $id;
        // die();
        // $product=Merchandise_product_detail::all();     
        $product=DB::select("select * from merchandise_product_details where agent_id='$id'");  
        return view('delivery_man.content',compact('product')); 
        
    }


    public function agent_profile($id)
    {
     
      
       $result=DB::select("select * from users where id='$id'"); 
       return view('delivery_man.profile',compact('result')); 

    }
  public  function agent_edit(Request $request, $id){

        //   echo   $request->name;
        //   die();


          $result=User::findorfail($id);
          $result->name=$request->name;
          $result->email=$request->email;
          $result->address=$request->address;
          $result->phone=$request->phone;
        //   $result->role_id=$request->role_id;
          $result->password=md5($request->password) ;
        //  $result->save();
  
  
  
  
  
          $image=$request->file('images');
         //return response()->json($data);
        if($image){
  
        
              $image_name=hexdec(uniqid());
              $ext =strtolower($image->getClientOriginalExtension());
              $image_full_name=$image_name.'.'.$ext;
             
              $upload_path='public/admin/agent/';
              $image_url=$upload_path.$image_full_name;
              $success = $image->move($upload_path,$image_full_name);
              if($request->old_images==null){
                  
              }else{
              unlink('public/admin/agent/'.$request->old_images);
              }
            //   $result->images=$image_url;
               $result->images=$image_full_name;
   
             $result->save();
             return redirect()->back()->with('success', 'Product added to cart successfully!');
          
  
        }else{
          $result->save();
          return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

    }









    public function agent_list()
    {
        $product=DB::select("select * from users where id='3'");  
        return view('admin.agent.index',compact('product')); 

    }
     
    public function agent_pickup_list($id)
    {
        //
          //
         // $id=session('sess_user_id');
          // echo $id;
          // die();
          // $product=Merchandise_product_detail::all();     
          $product=DB::select("select * from merchandise_products where agent_id='$id' and roll_express_status='0' order by pickup_man_status desc");  
          return view('delivery_man.agent_pickup_list',compact('product')); 
    }
     
    public function agent_delivery_list($id)
    {
        //
      //  $id=session('sess_user_id');
        // echo $id;
        // die();
        //  $product=Merchandise_product_detail::all();   
           $hold=DB::select("select * from product_hold_items");  
           $product=DB::select("select * from merchandise_product_details where agent_id='$id' and admin_recieve_agent_status='0' order by delivery_status desc");  
        return view('delivery_man.agent_delivery_list',compact('product', 'hold')); 
    }

    public function a_p_recieve_merchandise_status(Request $request, $id){

        $student = Merchandise_product::findorfail($id);
        $student->pickup_man_status=$request->pickup_man_status;          
        $student->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function agent_delivery_status(Request $request, $id){

        if($request->delivery_status==1){
                $student = Merchandise_product_detail::findorfail($id);
                $student->delivery_status=$request->delivery_status; 
                $student->return_id=0; 
                $student->hold_id=0;
                $student->save();
                return redirect()->back()->with('success', 'Product added to cart successfully!');
        }else{
                $student = Merchandise_product_detail::findorfail($id);
                $student->delivery_status=$request->delivery_status; 
                $student->return_id=0; 
                $student->hold_id=$request->hold_id;
                $student->save();
                return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
        
    }
    
    
    
    
    public function agent_delivery_hold(Request $request, $id){
       $student = Merchandise_product_detail::findorfail($id);
        $student->delivery_status=$request->delivery_status;
        $student->hold_id=$request->hold_id;
        $student->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    
    
    
    
    public function create()
    {
        //
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
