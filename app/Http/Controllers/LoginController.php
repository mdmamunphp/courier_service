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

//images upload
use Illuminate\Http\UploadedFile;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        return view("system.login");
    }

    public function login(Request $request)
    {



        $phone=$request->phone;
      $password=md5($request->password);

        //  echo "phone:". $phone."<br>";
        //  echo "password:". $password."<br>";
        //  die();
     
        $result=DB::select("select * from users where phone='$phone' and password='$password'");


//   print_r($result);
//   die();


        if(count($result)==1){

           // print_r($result);
            $user_id= $result[0]->id;
            $user_name= $result[0]->name;
            $user_email= $result[0]->email;
            $user_password=md5($request->password);
            $user_type= $result[0]->role_id;
            $user_phone= $result[0]->phone;
            $user_address= $result[0]->address;
           $user_images= $result[0]->images;
            $session_id=session()->getId();
             
            session(["sess_id"=>$session_id,"sess_user_id"=>$user_id,"sess_user_images"=>$user_images,"sess_user_name"=>$user_name,"sess_user_phone"=>$user_phone,"sess_user_address"=>$user_address,"sess_user_email"=>$user_email,"sess_user_passowrd"=>$user_password,"sess_type"=>$user_type]);

        //    echo $result[0]->roll_id;
        //    die();
           if($result[0]->role_id==1 ||$result[0]->role_id==4){
         //   echo "admin"; 
        // echo session('sess_type');
        //    die();
            return redirect('admin');

           }elseif($result[0]->role_id==2){

            return redirect('merchandise');
           // echo "merchendise";
           }elseif($result[0]->role_id==3){

            return redirect('delivery_man');
        
              //  echo "delivery man";
           }else{
            return redirect('customer');
         

           }
            


        }else{

            echo "invalid password or email";

        }




     //  return view('layout.profile');
    }

    public function logout()
    {
        //

        session()->forget(["sess_id","sess_user_id","sess_user_name","sess_user_email","sess_user_passowrd"]);

        session()->flush();
        session()->regenerate();


        return redirect('/');
       // return view('login.login');

    }
    

    public function register()
    {
        //
               return view("system.register");

    }
    public function register_users(Request $request)
    {
        // echo "name: ". $request->name ."<br>";
        // echo "phone: ".$request->phone ."<br>";
        // echo "password: ".$request->password ;
       // die();
       
       
        $result=new User();
        $result->name=$request->name;
        $result->phone=$request->phone;
        $result->password=md5($request->password);;
        $result->save();
     


    return redirect("login_page");

      
    }
    public function regiser_all_users(Request $request)
    {
        // echo "name: ". $request->name ."<br>";
        // echo "phone: ".$request->phone ."<br>";
        // echo "password: ".$request->password ;
        // echo "role id: ".$request->role_id ;
       // die();
       
       
        $result=DB::select("select * from users where phone='$request->phone'");
       if($result==null){

       
        $result=new User();
        $result->name=$request->name;
        $result->email=$request->email;
        $result->address=$request->address;
        $result->phone=$request->phone;
        $result->role_id=$request->role_id;
        $result->password=md5($request->password); ;
      //  $result->save();

        $name=$request->name;
        $phone=$request->phone;



        $image=$request->file('images');
       //return response()->json($data);
      if($image){

        if($request->role_id==2){
            $image_name=hexdec(uniqid());
            $ext =strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
           
            $upload_path='public/admin/merchandise/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            // $result->images=$image_url;
            $result->images=$image_full_name;



           $result->save();
           return redirect()->back()->with('success', 'Product added to cart successfully!');

        }elseif($request->role_id==3){
            
            $image_name=hexdec(uniqid());
            $ext =strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
           
            $upload_path='public/admin/agent/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            // $result->images=$image_url;
            $result->images=$image_full_name;



           $result->save();
           return redirect()->back()->with('success', 'Product added to cart successfully!');


        }elseif($request->role_id==1){

            $image_name=hexdec(uniqid());
            $ext =strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
           
            $upload_path='public/admin/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            // $result->images=$image_url;
            $result->images=$image_full_name;



           $result->save();
           return redirect()->back()->with('success', 'Product added to cart successfully!');


        }
          

      }else{
        $result->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
      }



 }else{
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
