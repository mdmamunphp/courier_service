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
use App\investment;
use App\Merchandise_product;
use App\Merchandise_product_detail;
use App\Product_return_item;
//images upload
use Illuminate\Http\UploadedFile;


class Admin_investmentController extends Controller
{
    
    public function index()
    {
        $results=investment::all();
        return view("admin.accounts.investment.index",compact('results'));
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       
        $student = new investment;
        $student->name=$request->name;
        $student->amount=$request->amount;
        $student->phone=$request->phone;
        $student->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
