@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">

       


        @isset($product)
        @foreach($product as $value) 
        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <small>

                        <b>চালান নাম্বার :</b>{{$value->m_invoice_id}}<br>
                        <b>মার্চেন্ট এর নাম : </b> <?php $res=rollstar_details($value->user_id);echo $res[0]->name;?><br>
                        <b>মার্চেন্ট এর মোবাইল নাম্বার : </b> <?php echo $res[0]->phone;?><br>
                        <b>পিকাপের ঠিকানা : </b> <?php echo $res[0]->address;?><br>

                        <b> পণ্যের মোট মূল্য :</b>{{$value->total_amount}}<br>
                        <b>পার্সেলটির অবস্থা :</b>
                        <?php
                                           if($value->roll_express_status==1){
                                               ?>
                        <h5 style="color:green">রোলস্টার পার্সেলটি রিসিভ করেছে।</h5>;
                        <form class="form-valide" align="right"
                            action="{{ URL::to('admin_p_recieve_agent_status/'.$value->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="roll_express_status" value="0">

                            <input type="submit" class="btn btn-danger btn-xs" value="পার্সেলটি রিসিভ করি নাই ">
                        </form>
                        <?php
                        }else{
                                ?>
                    <h5 style="color:red">পন্যটি প্রক্রিয়াধীন আছে</h5>
                        <form class="form-valide" align="right"
                            action="{{ URL::to('admin_p_recieve_agent_status/'.$value->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="roll_express_status" value="1">

                            <input type="submit" class="btn btn-success btn-xs" value="পার্সেলটি রিসিভ করেছি">
                        </form>
                        <?php
                        };?><br>

                    </small><br>
                    <!-- <button class="btn btn-success btn-xs">Pickup done</button> -->



                </div>
            </div>
        </div>
        @endforeach
        @endisset





    </div>
</div>
</div>
</div>

@endsection