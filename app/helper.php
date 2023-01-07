<?php


function rollstar_details($id){

    
    $result=DB::select("select * from users where id='$id'");
    
        return  $result;
   
}

function merchandise_delivery_details($id){

    
    $result=DB::select("select u.name, u.phone from users u, merchandise_product_details mpd,merchandise_products mp where mpd.merchandise_product_id='$id' and  mpd.merchandise_product_id=mp.id and mp.user_id=u.id GROUP by u.name, u.phone");
    
    //  print_r($id);
    //  die();
        return $result;
    
}


function total_quantity($id){


    $result=DB::select("select count(id) total_quantity from merchandise_product_details where merchandise_product_id='$id'");
return  $result;
}
function total_return_quantity($id){


    $result=DB::select("select count(id) total_return_quantity from merchandise_product_details where merchandise_product_id='$id' and delivery_status='3'");
return  $result;
}

function total_hold_quantity($id){


    $result=DB::select("select count(id) total_hold_quantity from merchandise_product_details where merchandise_product_id='$id' and delivery_status='2'");
return  $result;
}

function total_delivery_quantity($id){


    $result=DB::select("select count(id) total_delivery_quantity from merchandise_product_details where merchandise_product_id='$id' and delivery_status='1'");
return  $result;
}


function total_service_charge($id){

    $result=DB::select("select sum(delivery_charge) delivery_charge from merchandise_product_details where merchandise_product_id='$id' and delivery_status='1'");
    return  $result;

    
}


function total_hold_amount($id){

    $result=DB::select("select sum(product_price) total_hold_amount from merchandise_product_details where merchandise_product_id='$id' and delivery_status='2'");
    return  $result;

}


function total_return_amount($id){

    $result=DB::select("select sum(product_price) total_return_amount from merchandise_product_details where merchandise_product_id='$id' and delivery_status='3'");
    return  $result;

}

function total_delivery_amount($id){

    $result=DB::select("select sum(product_price) total_delivery_amount from merchandise_product_details where merchandise_product_id='$id' and delivery_status='1'");
    return  $result;

}


function total_return_charge($id){
      $result=DB::select("select sum(r.return_charge) return_charge, sum(r.return_recieved_amount) return_recieved_amount from merchandise_product_details mpd, return_histories r where mpd.merchandise_product_id='$id' and mpd.delivery_status='3'
      and r.m_p_details_id=mpd.id");
     return  $result;
}



function return_histories_details($id){
    
    // echo $id;
    // die();
    $result=DB::select("select r.*, p.name from return_histories r, product_return_items p where r.m_p_details_id='$id' and r.return_id=p.id");
    
    return $result;
    
}



// function total_delivery_quantity($id){

//     $result=DB::select("select sum(product_price) total_delivery_amount from merchandise_product_details where merchandise_product_id='$id' and delivery_status='1'");
//     return  $result;

// }





?>