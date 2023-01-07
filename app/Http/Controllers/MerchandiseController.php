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
use App\User;
use App\Merchandise_product;
use App\Merchandise_product_detail;
//images upload
use Illuminate\Http\UploadedFile;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo $id;
        // die();
        $id=session('sess_user_id');
        //$product=Merchandise_product::all();
        $product=DB::select("select * from merchandise_products  where user_id='$id'");

        // print_r($product);
        // die();
       
        return view('merchandise.content',compact('product'));



    }


    public function merchandise_profile($id)
    {
     
      
       $result=DB::select("select * from users where id='$id'"); 
       return view('merchandise.profile',compact('result')); 

    }
  public  function merchandise_edit(Request $request, $id){

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
             
              $upload_path='public/admin/merchandise/';
              $image_url=$upload_path.$image_full_name;
              $success = $image->move($upload_path,$image_full_name);
              if($request->old_images==null){
                  
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







        // public function merchandise_product($id){
            
            
            
        // }

        public function merchandis_product_list(){

           // $product=Merchandise_product::all();
           $id=session('sess_user_id');
            $product=DB::select("select * from merchandise_products  where user_id='$id' order by id desc");
            return view('merchandise.product_list',compact('product'));
        }



        public function m_p_send_agent_status(Request $request, $id){

            $student = Merchandise_product::findorfail($id);
            $student->merchandise_status=$request->merchandise_status;          
            $student->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
        
        
        
    public function merchandise_product_profit(){
        $id=session('sess_user_id');
        
         $product=DB::select("select * from merchandise_products where user_id='$id' order by id desc");
        return view("merchandise.product_list_profit", compact('product'));
    }
    
     public function merchandise_p_profit_details($id){
        $s_id=session('sess_user_id');
        
         $product=DB::select("select * from merchandise_products where user_id='$s_id' and id='$id' order by id desc");
        return view("merchandise.product_list_profit_details", compact('product'));
    }
    
    
    
    public function merchandise_r_express_paid_recieved(Request $request, $id)
    {
        
      echo  $request->rollexpress_paid_recieved."<br>";
       echo  $request->rollexpress_paid_recieved_old."<br>";
       $total= $request->rollexpress_paid_recieved+$request->rollexpress_paid_recieved_old;
        //   echo $total."<br>";
        //   echo $id;
        //   die();
        //     echo "agent_store";
        $student = Merchandise_product::findorfail($id);
        $student->merchandise_recieved_roll=$total;
        $student->save();
        return redirect()->back();
    
     
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
