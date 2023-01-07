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
use App\product_return_item;
use App\return_history;
//images upload
use Illuminate\Http\UploadedFile;

class Admin_agentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "ok";
        // die();

        $product=DB::select("select * from users where role_id='3' order by id desc");  
        return view('admin.agent.index',compact('product')); 

    }
    public function admin_agent_delete(Request $request)
    {
        $id=$request->agent_id;
      
       $res=DB::select("delete from users where id='$id'"); 

      return  response()->json($res);

    }

    public function admin_agent_profile($id)
    {
     
      
       $result=DB::select("select * from users where id='$id'"); 
       return view('admin.agent.profile',compact('result')); 

    }
  public  function admin_agent_edit(Request $request, $id){

        //   echo   $request->name;
        //   die();


          $result=User::findorfail($id);
          $result->name=$request->name;
          $result->email=$request->email;
          $result->address=$request->address;
          $result->phone=$request->phone;
          // $result->role_id=$request->role_id;
          // $result->password=$request->password ;
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
                // unlink('public/admin/merchandise/'.$request->old_images);
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

    public function admin_agent_pickup($id){

      
        //  echo $id;
        //  die(); 
        // $product=Merchandise_product_detail::all();     
        $product=DB::select("select * from merchandise_products where agent_id='$id' order by id desc");  
        return view('admin.agent.pickup',compact('product')); 

    }

    public function admin_agent_delivery($id){
    
            // echo $id;
            // die();
             $return=product_return_item::all();     
            $product=DB::select("select * from merchandise_product_details where agent_id='$id' order by delivery_status asc");  
            return view('admin.agent.delivery',compact('product','return')); 

    }

    public function delivery__return_status(Request $request, $id){

         //echo  $id;
        // echo $request->return_histories_id;
         $history=$request->return_histories_id;
        // die();
         if(isset($history)){
             
              $id=$request->m_p_details_id;
         $result = Merchandise_product_detail::findorfail($id);
         $result->delivery_status=$request->delivery_status;
         $result->return_id=$request->return_id;
         $result->save();
        
       $return =return_history::findorfail($history);
       $return->m_p_details_id=$request->m_p_details_id;
       $return->return_charge=$request->return_charge;
       $return->return_quantity=$request->return_quantity;
       $return->return_recieved_amount=$request->return_recieved_amount;
       $return->return_id=$request->return_id;
       $return->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
         }else{
             
         
         $id=$request->m_p_details_id;
         $result = Merchandise_product_detail::findorfail($id);
         $result->delivery_status=$request->delivery_status;
         $result->return_id=$request->return_id;
         $result->save();
        
       $return =new return_history;
       $return->m_p_details_id=$request->m_p_details_id;
       $return->return_charge=$request->return_charge;
       $return->return_quantity=$request->return_quantity;
       $return->return_recieved_amount=$request->return_recieved_amount;
       $return->return_id=$request->return_id;
       $return->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
         }
        
        
       
    
        
    }
    public function delivery__return_reject(Request $request, $id){
        
            
            //  echo  $id."<br>";
            //  echo $request->delivery_status;
            //  die();
             
         $result = Merchandise_product_detail::findorfail($id);
         $result->delivery_status=$request->delivery_status;
         $result->return_id=$request->return_id;
         $result->save();
     
        $product=DB::delete("delete from return_histories where m_p_details_id='$id'");  
         return redirect()->back()->with('success', 'Product added to cart successfully!');
        
         
    }
        
   public function admin_agent_account_close(Request $request, $id){
       
    $student = Merchandise_product_detail::findorfail($id);
    $student->admin_recieve_agent_status=$request->admin_recieve_agent_status;
  
    $student->save();
    return redirect()->back()->with('success', 'Product added to cart successfully!');
   }


   public function admin_p_recieve_agent_status(Request $request, $id){
       
    //  echo  $id;
    // echo $request->agent_id;
    // die();
    $student = Merchandise_product::findorfail($id);
 
    $student->roll_express_status=$request->roll_express_status;
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
