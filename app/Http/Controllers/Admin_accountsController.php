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
use App\merchandise_payment_detail;

use App\admin_daily_account;
//images upload
use Illuminate\Http\UploadedFile;
class Admin_accountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function merchandise_payment()
    {
        //
        $product=DB::select("select * from users where role_id='2'");  
       // $product=DB::select("select mp.id,mp.total_amount, mp.agent_id, mp.m_invoice_id from merchandise_products mp");
        return view("admin.accounts.index", compact('product'));
    }
    public function merchandise_payment_status($id)
    {
        //
        // echo "ok";
        // die();
      //  $product=DB::select("select * from users where role_id='2'");  
        $product=DB::select("select * from merchandise_products where user_id='$id' order by id desc");
        return view("admin.accounts.merchandise_wise_payment", compact('product'));
    }

    public function payment_details($id){

     

      
        $result=DB::select("select * from merchandise_product_details  where merchandise_product_id='$id'");
               //  print_r($result);
          // return response()->json($result);
      
          //  die();
      
          return view("admin.accounts.payment_details", compact('result'));
    }

    public function merchandise_payment_paid(Request $request,$id)
    {
        //
        $student = Merchandise_product_detail::findorfail($id);
     
        $student->payment_status=$request->payment_status;
        $student->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
public function rollexpress_paid(Request $request, $id)
    {
        
    //   echo "admin id =". session('sess_user_id')."<br>";
    //    echo "old_paid =". $request->rollexpress_paid_old."<br>";
    //    echo "merchandise id =".$request->merchandise_id."<br>";
    //    echo "product id =". $id."<br>";
    //    echo "paid = ".$request->rollexpress_paid."<br>";
       $total= $request->rollexpress_paid+$request->rollexpress_paid_old;
  // echo $total."<br>";
     //  echo $id;
    //  die();
    //     echo "agent_store";
        $student = Merchandise_product::findorfail($id);
        $student->rollexpress_paid=$total;
        $student->save();

        $payment_d = new merchandise_payment_detail();
        $payment_d->admin_id=session('sess_user_id');
        $payment_d->merchandise_id=$request->merchandise_id;
        $payment_d->m_p_id=$id;
        $payment_d->admin_paid_amount=$request->rollexpress_paid;
        $payment_d->save();

        return redirect()->back();


     
    }

    public function daily_account(){

        $results=DB::select("select * from admin_daily_accounts");

        return view('admin.accounts.add_daily_account', compact('results'));
    }

    public function get_daily_accounts(Request $request){


//echo $request->daily_date;
//  where name like '%$s%' or overtime_date like '%$s%' or o.id like '%$s%' or o.hours like '%$s%'");
$total_p_amount=DB::select("select sum(total_amount) total_p_amount from merchandise_products where created_at like '%$request->daily_date%'");
$total_p_quantity=DB::select("select count(id) total_p_quantity from merchandise_product_details where created_at like '%$request->daily_date%'");
$total_delivery=DB::select("select sum(product_price) total_delivery from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=1");
$total_delivery_quantity=DB::select("select count(id) total_delivery_quantity from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=1");
$total_delivery_charge=DB::select("select sum(delivery_charge) total_delivery_charge from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=1");
$total_hold=DB::select("select sum(product_price) total_hold from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=2");
$total_hold_quantity=DB::select("select count(id) total_hold_quantity from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=2");
$total_return=DB::select("select sum(product_price) total_return from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=3");
$total_return_quantity=DB::select("select count(id) total_return_quantity from merchandise_product_details where created_at like '%$request->daily_date%' and delivery_status=3");
$total_return_charge=DB::select("select sum(return_charge) total_return_charge from return_histories where created_at like '%$request->daily_date%'");
$return_recieved_amount=DB::select("select sum(return_recieved_amount) return_recieved_amount from return_histories where created_at like '%$request->daily_date%'");
$rollexpress_paid=DB::select("select sum(rollexpress_paid) rollexpress_paid from merchandise_products where created_at like '%$request->daily_date%'");
$merchandise_recieved_roll=DB::select("select sum(merchandise_recieved_roll) merchandise_recieved_roll from merchandise_products where created_at like '%$request->daily_date%'");
$expenses=DB::select("select sum(amount) expenses from expenses where created_at like '%$request->daily_date%'");
$investments=DB::select("select sum(amount) investments from investments where created_at like '%$request->daily_date%'");
// echo "total_p_amount =".$total_p_amount[0]->total_p_amount."</br>";
// echo "total_delivery =".$total_delivery[0]->total_delivery."</br>";
// echo "total_delivery_charge =".$total_delivery_charge[0]->total_delivery_charge."</br>";
// echo "total_hold =".$total_hold[0]->total_hold."</br>";
// echo "total_return =".$total_return[0]->total_return."</br>";
// echo "total_return_charge =".$total_return_charge[0]->total_return_charge."</br>";
// echo "return_recieved_amount =".$return_recieved_amount[0]->return_recieved_amount."</br>";

// echo "rollexpress_paid =".$rollexpress_paid[0]->rollexpress_paid."</br>";
// echo "merchandise_recieved_roll =".$merchandise_recieved_roll[0]->merchandise_recieved_roll."</br>";
// echo "expenses =".$expenses[0]->expenses."</br>";
// echo "investments =".$investments[0]->investments."</br>";



//die();


            return view('admin.accounts.get_daily_accounts_details', compact('total_p_amount', 'total_p_quantity', 'total_delivery', 'total_delivery_quantity',
             'total_delivery_charge', 'total_hold', 'total_hold_quantity', 'total_return', 'total_return_quantity', 'total_return_charge', 'return_recieved_amount', 'rollexpress_paid', 'merchandise_recieved_roll', 'expenses', 'investments'));

        }
        public function store_daily_accounts(Request $request){


//             echo "total_p_amount =". $request->total_p_amount."</br>";
// echo "total_delivery =". $request->total_delivery."</br>";
// echo "total_delivery_charge =". $request->total_delivery_charge."</br>";
// echo "total_hold =". $request->total_hold."</br>";
// echo "total_return =". $request->total_return."</br>";
// echo "total_return_charge =". $request->total_return_charge."</br>";
// echo "return_recieved_amount =". $request->return_recieved_amount."</br>";

// echo "rollexpress_paid =". $request->rollexpress_paid."</br>";
// echo "merchandise_recieved_roll =". $request->merchandise_recieved_roll."</br>";
// echo "expenses =". $request->expenses."</br>";
// echo "investments =". $request->investments."</br>";
// echo "End Balance =". $request->end_cash_balance."</br>";
// die();

                $result=new admin_daily_account();
                $result->total_p_amount=$request->total_p_amount;
                $result->total_delivery=$request->total_delivery;
                $result->total_delivery_charge=$request->total_delivery_charge;
                $result->total_hold=$request->total_hold;
                $result->total_return=$request->total_return;
                $result->total_return_charge=$request->total_return_charge;
                $result->return_recieved_amount=$request->return_recieved_amount;
                $result->rollexpress_paid=$request->rollexpress_paid;
                $result->merchandise_recieved_roll=$request->merchandise_recieved_roll;
                $result->expenses=$request->expenses;
                $result->investments=$request->investments;
                $result->end_cash_balance=$request->end_cash_balance;
                $result->user_id=session('sess_user_id');;
                $result->save();
                
                return redirect('daily_account');

        }
    public function admin_merchandise_invoice($id)
    {
        //
        // $merchandise=DB::select("select users.*, mp.m_invoice_id, mp.agent_id from users, merchandise_products mp  where mp.id='$id' and mp.user_id=users.id");  
        $merchandise=DB::select("select users.*, mp.m_invoice_id, mp.agent_id, mp.created_at mcreated_at from users, merchandise_products mp  where mp.id='$id' and mp.user_id=users.id");  
        $result=DB::select("select * from merchandise_products where id='$id' order by id desc"); 
        return view('admin.accounts.admin_merchandise_invoice', compact('result', 'merchandise'));
        // return view('admin.accounts.new_invoice');
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
