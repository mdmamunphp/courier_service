<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Product status</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <style>
body{
    margin: 0;
    padding: 0;
    min-height: 100vh;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: consolas;
}




.container{
    width: 1000px;
    position: relative;
    display: flex;
    justify-content: space-between;
}

.container .card{
    position: relative;
    cursor: pointer;
}

.container .card .face{
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.container .card .face.face1{
    position: relative;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container .card:hover .face.face1{
    background: #ff0057;
    transform: translateY(0);
}

.container .card .face.face1 .content{
    opacity: 0.2;
    transition: 0.5s;
}

.container .card:hover .face.face1 .content{
    opacity: 1;
}

.container .card .face.face1 .content img{
    max-width: 100px;
}

.container .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
}

.container .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
    transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);
}

.container .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.container .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 5px;
    border: 1px solid #333;
}

.container .card .face.face2 .content a:hover{
    background: #333;
    color: #fff;
}
 </style>
</head>
<body>
    <div class="container row">

        
    @isset($result)
    @foreach($result as $value)
        <div class="card" style=" background-color:initial;margin-left:7px;">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                    <?php
                                           if($value->delivery_status==1){
                                                echo "<h3 style='color:#66ff33'> পার্সেলটি ডেলিভারি সম্পন্ন হয়েছে।</h3>";
                                                echo $value->updated_at;
                                           }elseif ($value->delivery_status==2) {
                                            echo "<h3 style='color:#0066ff'> পার্সেলটি হোল্ড রাখা হয়েছে।</h3>";
                                            echo $value->updated_at;
                                           }elseif ($value->delivery_status==3) {
                                            echo "<h3 style='color:#ff0066'> পার্সেলটি রিটার্ন করা হচ্চে।</h3>";
                                            echo $value->updated_at;
                                        }elseif ($value->delivery_status==4) {
                                            echo "<h3 style='color:#ffff00'> আপনার পার্সেলটির জন্য রওনা দিয়েছে।</h3>";
                                            echo $value->updated_at;
                                        }else{
                                            echo "<h3 style='color:#ffffff'>পন্যটি প্রক্রিয়াধীন আছে।</h3>";
                                            echo $value->updated_at;
                                        }
                                           ?>
                    <!-- <h3>{{$value->customer_phone}}</h3> -->
                    <!-- <h3>Details</h3> -->
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>
                    <b>তারিখ : </b>
                    @php
                                        $startdate=strtotime($value->created_at);
                                            echo date("M d",  $startdate) ." , ";
                                            echo date("Y",  $startdate);
                                     
                                        @endphp 
                    </br>
                     <b>কাস্টমার এর নাম : </b>{{$value->customer_name}}</br>
                   <b>কাস্টমার এর মোবাইল নাম্বার : </b>{{$value->customer_phone}}</br>
                    <b>ডেলিভারির ঠিকানা : </b>{{$value->customer_address}}</br>
                   <b>পার্সেলটির মূল্য : </b>{{$value->product_price}}</p>
                        <a href="#"> 
                         @php
                          $res=rollstar_details($value->agent_id);
                          if($res==null){

                          }else{
                           echo $res[0]->name;
                           @endphp
                           </a> <a href="#">@php 
                           echo $res[0]->phone;
                           }
                           @endphp</a>
                </div>
            </div>
        </div>
        @endforeach
  @endisset

        <!-- <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                    <h3>Code</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div> -->
        <!-- <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                    <h3>Launch</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div> -->
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>