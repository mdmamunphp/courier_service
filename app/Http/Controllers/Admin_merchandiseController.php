<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Merchandise_product;
use App\User;
use App\Merchandise_product_detail;
use App\Product_return_item;
//images upload
use Illuminate\Http\UploadedFile;

class Admin_merchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=DB::select("select * from users where role_id='2'");  
        return view('admin.merchandise.index',compact('product')); 

    }



    public function admin_merchandise_profile($id)
    {
     
      
       $result=DB::select("select * from users where id='$id'"); 
       return view('admin.merchandise.profile',compact('result')); 

    }
  public  function admin_merchandise_edit(Request $request, $id){

        //   echo   $request->name;
        //   die();


          $result=User::findorfail($id);
          $result->name=$request->name;
          $result->email=$request->email;
          $result->address=$request->address;
          $result->phone=$request->phone;
          $result->role_id=$request->role_id;
        //   $result->password=$request->password ;
        //  $result->save();
  
  
  
  
  
          $image=$request->file('images');
         //return response()->json($data);
        if($image){
  
        
              $image_name=hexdec(uniqid());
              $ext =strtolower($image->getClientOriginalExtension());
              $image_full_name=$image_name.'.'.$ext;
             
              $upload_path='public/admin/merchandise/';
              $image_url=$upload_path.$image_full_name;
              $success = $image->move($upload_path,$image_full_name);
              if($request->old_images==null){
               // unlink('public/admin/merchandise/'.$request->old_images);
              }else{
                unlink('public/admin/merchandise/'.$request->old_images);
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

    public function admin_agent_pickup($id){

      
        //  echo $id;
        //  die(); 
        // $product=Merchandise_product_detail::all();     
        $product=DB::select("select * from merchandise_products where agent_id='$id'");  
        return view('admin.agent.pickup',compact('product')); 

    }









    
    public function admin_merchandise_delete(Request $request)
    {
        $id=$request->merchandise_id;
      
       $res=DB::select("delete from users where id='$id'"); 

      return  response()->json($res);

    }
    public function merchandise_product_view(){

        // $product=Merchandise_product::all();
     
        // $product=DB::select("select mp.id,mp.total_amount, mp.agent_id, mp.m_invoice_id from merchandise_products mp");
        // $agent=DB::select("SELECT * FROM users where role_id='3'");
        // return view("admin.merchandise.product_view",compact('product'));
  
    
    }
    

    public function admin_unpickup(){
        $product=DB::select("select * from users where role_id='2'");  
        return view('admin.merchandise.unpickup',compact('product')); 
    }

    public function pickup_invoice($id){

        // echo $id;
        // die();
        $merchandise=DB::select("select users.*, mp.m_invoice_id, mp.agent_id from users, merchandise_products mp  where mp.id='$id' and mp.user_id=users.id");  
        $result=DB::select("select * from merchandise_product_details where merchandise_product_id='$id'"); 
         
        return view('admin.merchandise.pickup_invoice_print', compact('result', 'merchandise'));

    }
 
    public function delivery_invoice($id){
        
        $merchandise=DB::select("select users.*, mp.m_invoice_id, mp.created_at mcreated_at from users, merchandise_products mp, merchandise_product_details mpd  where mpd.id='$id' and mpd.merchandise_product_id=mp.id and mp.user_id=users.id");  
        $result=DB::select("select * from merchandise_product_details where id='$id'"); 
         
        return view('admin.merchandise.delivery_invoice_print', compact('result', 'merchandise'));
    }

    public function admin_undelivery(){

        $product=DB::select("select * from users where role_id='2'");  
        return view('admin.merchandise.undelivery',compact('product')); 
    }

public function edit_product_details($id){


 $result=DB::select("select * from merchandise_product_details where id='$id'"); 

 return view('admin.merchandise.edit_product_details',compact('result')); 

}

    public function admin_merchandise_product_list($id){

        $product=DB::select("select mp.id,mp.total_amount, mp.agent_id, mp.m_invoice_id, mp.created_at created_at from merchandise_products mp where mp.user_id='$id' order by id desc");
     $merchandise=DB::select("SELECT * FROM users where id='$id'");
        return view("admin.merchandise.product_view",compact('product','merchandise'));
  
    }

    public function admin_merchandise_undelivery_product_list($id){

        $product=DB::select("select mp.id,mp.total_amount, mp.agent_id, mp.m_invoice_id, mp.created_at created_at from merchandise_products mp where mp.user_id='$id' order by id desc");
     $merchandise=DB::select("SELECT * FROM users where id='$id'");
        return view("admin.merchandise.undelivery_product_view",compact('product','merchandise'));
  
    }

    public function admin_merchandise_product_details($id){

        $result=DB::select("select * from merchandise_product_details  where merchandise_product_id='$id'");
        //  print_r($result);
          // return response()->json($result);
      
          //  die();
        //  $return=Product_return_item::all();   
          $return=DB::select("select * from product_return_items");    
          
          return view("admin.merchandise.all_product_details", compact('result','return'));
      
    } 
    public function admin_m_delivery_p_details($id){

        $result=DB::select("select * from merchandise_product_details  where merchandise_product_id='$id'");
        //  print_r($result);
          // return response()->json($result);
      
          //  die();
         // $return=Product_return_item::all();  
                   $return=DB::select("select * from product_return_items");   
          return view("admin.merchandise.undelivery_product_details", compact('result','return'));
      
    }


    public function pickup_agent_add($id)
    {
        //

        // echo "ok";
        // die();
      
        $agent=DB::select("SELECT * FROM users where role_id='3'");
        $product=DB::select("select m.id, u.name, u.address, u.phone, m.agent_id from merchandise_products m, users u where m.id='$id' and u.id=m.user_id");
        

        return view("admin.merchandise.pickup_agent_add",compact('agent','product'));
    
    }


    public function pickup_agent_store(Request $request, $id){
       
        //  echo  $id;
        // echo $request->agent_id;
        // die();
        $student = Merchandise_product::findorfail($id);
     
        $student->agent_id=$request->agent_id;
        $student->save();
        return redirect()->back();

    }
    
   


    public function delivery_agent_add($id)
    {
        //
        //echo $id;
        $agent=DB::select("SELECT * FROM users where role_id='3'");
        $product=DB::select("SELECT * FROM merchandise_product_details where id='$id'");

       // print_r($product);

        return view('admin.agent_add',compact('agent','product'));
    }

    public function delivery_agent_store(Request $request, $id)
    {
        //
//        echo  $request->admin_recieve_agent_status;
//    die();

    //     echo "agent_store";
        if( $request->admin_recieve_agent_status==1){

        $student = Merchandise_product_detail::findorfail($id);
        $student->admin_invoice_id=$request->admin_invoice_id;
        $student->product_name=$request->product_name;
        $student->product_price=$request->product_price;
        $student->customer_address=$request->customer_address;
        $student->delivery_charge=$request->delivery_charge;
        $student->urgent_delivery=$request->urgent_delivery;
        $student->admin_recieve_agent_status=0;
        $student->agent_id=$request->agent_id;
        $student->save();
        return redirect('admin_undelivery');
     
    }else{

        $student = Merchandise_product_detail::findorfail($id);
        $student->admin_invoice_id=$request->admin_invoice_id;
        $student->product_name=$request->product_name;
        $student->product_price=$request->product_price;
        $student->customer_address=$request->customer_address;
        $student->delivery_charge=$request->delivery_charge;
        $student->urgent_delivery=$request->urgent_delivery;      
        $student->agent_id=$request->agent_id;
        $student->save();
        return redirect('admin_undelivery');
    }
 

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
