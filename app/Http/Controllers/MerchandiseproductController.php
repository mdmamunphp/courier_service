<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Purchaseinvoice;
 
use App\Merchandise_product;
use App\Merchandise_product_detail;
use App\Product_return_item;

//images upload
use Illuminate\Http\UploadedFile;
use Validator;
class MerchandiseproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $product=Merchandise_product::all();
        // print_r($product);

        // $id=rand(100,1000);
        // $fname=strtoupper(substr(session('sess_user_name'),0,3))."-".$id;
        // echo $fname;
        //  die();
   


        return view('merchandise.product_add',compact('product'));
    }

 public function merchandise_product($id)
    {
        //
      //  $product=Merchandise_product::all();
          $product=DB::select("select * from merchandise_products  where user_id='$id' and agent_id=0 order by id desc");
        // print_r($product);

        // $id=rand(100,1000);
        // $fname=strtoupper(substr(session('sess_user_name'),0,3))."-".$id;
        // echo $fname;
        //  die();


        return view('merchandise.product_add',compact('product'));
    }
    
    

            public function cancel_product_add(){
                
                
            session()->forget('cart');
            session()->forget(["customer_name","customer_paid","customer_address","delivery_charge", "product_price","invoice_id","phone"]);
            session()->flash('success','Product removed successfully');
          //  return response()->json($purchase);
            return redirect()->back();
          
           }

        public function product_store(Request $request){
        $id=rand(100,1000);
            $invoice_id=strtoupper(substr(session('sess_user_name'),0,3))."-".$id;
            $product =new Merchandise_product();
            $product->user_id=session('sess_user_id');
            $product->total_amount=$request->total_amount;
            $product->m_invoice_id=$invoice_id;     
       
            $product->save();
    
            $p_id=$product->id;
           // return response()->json($purchase);
    
    //echo $p_id;
   // die();
            foreach(session('cart') as $item_id=>$details){
    
    
    
    
                $product_d =new Merchandise_product_detail();
                $product_d->merchandise_product_id=$p_id;
                $product_d->customer_name=$details['customer_name'];
                $product_d->customer_address=$details['customer_address'];
                $product_d->product_price=$details['product_price'];
                $product_d->delivery_charge=$details['delivery_charge'];
                $product_d->urgent_delivery=$details['urgent_delivery'];
                $product_d->customer_phone=$details['phone'];
                $product_d->customer_paid=$details['customer_paid'];
    
                $product_d->save();
    
    
            //    $qty=$details["qty"];
            //    $price=$details["price"];
            //    DB::insert("insert into invoice_details(invoice_id,item_id,qty,price,discount)values('$invoice_id','$item_id','$qty','$price','0')");
    
            //    echo $id." ";
            //    echo $details["name"]."<br>";    
           
        }
    
    
            session()->forget('cart');
            session()->forget(["customer_name","customer_paid","customer_address","delivery_charge", "product_price","invoice_id","phone", "urgent_delivery"]);
            session()->flash('success','Product removed successfully');
          //  return response()->json($purchase);
            return redirect()->back();
            






        }
        
    public function product_add(Request $request)
    {
        
        
         $request->validate([
             
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:11'
               
            ]);
          
        
        
       // echo $request->purchase_price;
      //  die();
        //   echo   $request->invoice_id  ."<br>";
          echo   $request->customer_name  ."<br>";        
          echo   $request->product_price ."<br>";
          echo   $request->phone ."<br>";

        $cart = session()->get('send');
        session([
                // "invoice_id"=>$request->invoice_id,
                "customer_name"=>$request->customer_name,
                "customer_address"=>$request->customer_address,
                "product_price"=>$request->product_price,
                "delivery_charge"=>$request->delivery_charge,
                "urgent_delivery"=>$request->urgent_delivery,
                "customer_paid"=>$request->customer_paid,
                "phone"=>$request->phone]);


     // $product = Product::find($request->product_id);

       // $id=$request->product_id;
        $cart = session()->get('cart');

        if (!$cart) {

                    $cart = [
                        $request->phone =>[
                            // "invoice_id" => $request->invoice_id,
                            "customer_name" => $request->customer_name,   
                             "customer_address" => $request->customer_address,
                            "product_price" => $request->product_price,
                            "delivery_charge" => $request->delivery_charge,
                            "urgent_delivery"=>$request->urgent_delivery,
                             "customer_paid"=>$request->customer_paid,
                            "phone" => $request->phone


                        ]

                ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

   //  return response()->json($cart);

       if(isset($cart[$request->phone])) {

        $cart[$request->phone]['product_price']=$request->product_price;  
         $cart[$request->phone]['delivery_charge']=$request->delivery_charge; 
        $cart[$request->phone]['customer_name']=$request->customer_name;
         $cart[$request->phone]['customer_address']=$request->customer_address;
           $cart[$request->phone]['customer_paid']=$request->customer_paid;
           $cart[$request->phone]['urgent_delivery']=$request->urgent_delivery;
           
        // $cart[$request->phone]['phone']=$request->phone;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

     }

    $cart[$request->phone] =[
        // "invoice_id" => $request->invoice_id,
        "customer_name" => $request->customer_name,  
        "customer_address" => $request->customer_address,    
        "product_price" => $request->product_price,
         "delivery_charge" => $request->delivery_charge,
         "customer_paid" => $request->customer_paid,
        "urgent_delivery"=>$request->urgent_delivery,
        "phone" => $request->phone
    ];

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');



    }



public function m_all_product_details($id){


    $result=DB::select("select * from merchandise_product_details  where merchandise_product_id='$id' order by delivery_status asc");
  //  print_r($result);
    // return response()->json($result);

    //  die();
    $return=DB::select("select * from product_return_items");    
    return view("merchandise.all_product_details", compact('result','return'));

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
