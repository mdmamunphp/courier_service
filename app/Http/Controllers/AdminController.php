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

//images upload
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $total_agent=DB::select('select count(id) total_agent from users where role_id=3');
        $total_merchandise=DB::select('select count(id) total_merchandise from users where role_id=2'); 
        $total_customer=DB::select('select count(id) total_customer from merchandise_product_details');
        
        $total_delivery=DB::select('select count(id) total_delivery from merchandise_product_details where delivery_status=1');
        $total_hold=DB::select('select count(id) total_hold from merchandise_product_details where delivery_status=2');
         $total_return=DB::select('select count(id) total_return from merchandise_product_details where delivery_status=3');
        
        $delivery_charge=DB::select('select sum(delivery_charge) charge from merchandise_product_details where delivery_status=1');
        $return_charge=DB::select('select sum(return_charge) return_charge, sum(return_recieved_amount) return_recieved_amount  from merchandise_product_details mpd, return_histories rh where delivery_status=3 and rh.m_p_details_id=mpd.id');
        $expense=DB::select('select sum(amount) expense from expenses');
        $investment=DB::select('select sum(amount) investment from investments');
        // echo    "total delivery charge". $return_charge[0]->return_charge;

        // die();
     
       
        return view('admin.content', compact('total_agent', 'total_delivery', 'total_hold', 'total_return', 'total_merchandise', 'total_customer', 'delivery_charge', 'return_charge', 'expense', 'investment'));
    }



    public function admin_profile($id)
    {
     
      
       $result=DB::select("select * from users where id='$id'"); 
       return view('admin.profile',compact('result')); 

    }
  public  function admin_edit(Request $request, $id){

        //   echo   $request->name;
        //   die();


          $result=User::findorfail($id);
          $result->name=$request->name;
          $result->email=$request->email;
          $result->address=$request->address;
          $result->phone=$request->phone;
          $result->password=md5($request->password) ;
        //  $result->save();
  
  
  
  
  
          $image=$request->file('images');
         //return response()->json($data);
        if($image){
  
        
              $image_name=hexdec(uniqid());
              $ext =strtolower($image->getClientOriginalExtension());
              $image_full_name=$image_name.'.'.$ext;
             
              $upload_path='public/admin/';
              $image_url=$upload_path.$image_full_name;
              $success = $image->move($upload_path,$image_full_name);
              if($request->old_images==null){
            
              }else{
                    unlink('public/admin/'.$request->old_images);
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

   
    public function customer()
    {
          $product=Merchandise_product::all();
        // print_r($product);
        // die();
        return view('admin.customer',compact('product'));
        
    }

    public function total_delivery_charge(){

    }
    public function total_expense_amount(){
        
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
