<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('roll_express');
});



// Route::get("/", "HomeController@index"); 
Route::resource("login_page","LoginController");
Route::get("register","LoginController@register");
Route::post("login","LoginController@login");
Route::get("logout", "LoginController@logout");
Route::post("register_users","LoginController@register_users");
Route::post("home_product_details","HomeController@home_product_details");
Route::post("regiser_all_users","LoginController@regiser_all_users");

//**************************** admin *******************************/
Route::resource("admin","AdminController")->middleware('test');
Route::get("admin_customer", "AdminController@customer")->middleware('test');

Route::get("admin_profile/{id}","AdminController@admin_profile")->middleware('test');
Route::post("admin_edit/{id}","AdminController@admin_edit")->middleware('test');






//**************************** admin  to agent *******************************/
Route::get("admin_agent_pickup/{id}","Admin_agentController@admin_agent_pickup")->middleware('test');
Route::get("admin_agent_delivery/{id}","Admin_agentController@admin_agent_delivery")->middleware('test');
Route::post("delivery__return_status/{id}","Admin_agentController@delivery__return_status")->middleware('test');
Route::post("delivery__return_reject/{id}","Admin_agentController@delivery__return_reject")->middleware('test');
Route::post("admin_agent_account_close/{id}","Admin_agentController@admin_agent_account_close")->middleware('test');
Route::post("admin_p_recieve_agent_status/{id}","Admin_agentController@admin_p_recieve_agent_status")->middleware('test');
Route::resource("agent_list","Admin_agentController")->middleware('test');
Route::get("admin_agent_profile/{id}","Admin_agentController@admin_agent_profile")->middleware('test');
Route::post("admin_agent_edit/{id}","Admin_agentController@admin_agent_edit")->middleware('test');


//**************************** admin  to merchandise *******************************/
Route::get("admin_unpickup","Admin_merchandiseController@admin_unpickup")->middleware('test');
Route::get("admin_undelivery","Admin_merchandiseController@admin_undelivery")->middleware('test');
Route::get("admin_m_delivery_p_details/{id}","Admin_merchandiseController@admin_m_delivery_p_details")->middleware('test');
Route::get("admin_merchandise_undelivery_product_list/{id}","Admin_merchandiseController@admin_merchandise_undelivery_product_list")->middleware('test');
Route::get("admin_merchandise_product_list/{id}","Admin_merchandiseController@admin_merchandise_product_list")->middleware('test');
Route::get("admin_merchandise_product_details/{id}","Admin_merchandiseController@admin_merchandise_product_details")->middleware('test');
Route::get("delivery_agent_add/{id}", "Admin_merchandiseController@delivery_agent_add")->middleware('test');
Route::post("delivery_agent_store/store/{id}", "Admin_merchandiseController@delivery_agent_store")->middleware('test');
Route::get("merchandise_product_view","Admin_merchandiseController@merchandise_product_view")->middleware('test');
Route::get("pickup_agent_add/{id}","Admin_merchandiseController@pickup_agent_add")->middleware('test');
Route::post("pickup_agent_add/store/{id}","Admin_merchandiseController@pickup_agent_store")->middleware('test');
Route::resource("merchandise_list","Admin_merchandiseController")->middleware('test');

Route::get("admin_merchandise_profile/{id}","Admin_merchandiseController@admin_merchandise_profile")->middleware('test');
Route::post("admin_merchandise_edit/{id}","Admin_merchandiseController@admin_merchandise_edit")->middleware('test');
Route::get("pickup_invoice/{id}","Admin_merchandiseController@pickup_invoice")->middleware('test');
Route::get("delivery_invoice/{id}","Admin_merchandiseController@delivery_invoice")->middleware('test');

Route::get("admin_merchandise_invoice/{id}","Admin_accountsController@admin_merchandise_invoice")->middleware('test');

Route::get("edit_product_details/{id}","Admin_accountsController@edit_product_details")->middleware('test');

//**************************** admin  to Account *******************************/
Route::get("invoice","Admin_accountsController@invoice")->middleware('test');
Route::get("daily_account","Admin_accountsController@daily_account")->middleware('test');
Route::post("get_daily_accounts","Admin_accountsController@get_daily_accounts")->middleware('test');
Route::post("store_daily_accounts","Admin_accountsController@store_daily_accounts")->middleware('test');

Route::post("rollexpress_paid/{id}","Admin_accountsController@rollexpress_paid")->middleware('test');

Route::get("merchandise_payment","Admin_accountsController@merchandise_payment")->middleware('test');
Route::get("payment_details/{id}","Admin_accountsController@payment_details")->middleware('test');
Route::get("merchandise_payment_status/{id}","Admin_accountsController@merchandise_payment_status")->middleware('test');
Route::post("merchandise_payment/store/{id}","Admin_accountsController@merchandise_payment_paid")->middleware('test');

Route::resource("expense","Admin_expenseController")->middleware('test');
Route::resource("investment","Admin_investmentController")->middleware('test');
Route::POST("expense_list","Admin_expenseController@expense_list");

Route::POST("merchandise_payment_status","Admin_accountsController@merchandise_payment_status")->middleware('test');
//////****************admin Stock ***************************/

Route::get("product_hold_list","Admin_stockController@product_hold_list")->middleware('test');
Route::get("return","Admin_stockController@return")->middleware('test');
Route::POST("add_return","Admin_stockController@add_return")->middleware('test');
Route::get("hold","Admin_stockController@hold")->middleware('test');
Route::POST("add_hold","Admin_stockController@add_hold")->middleware('test');
//////****************admin ajax ***************************/
Route::POST("admin_merchandise_delete","Admin_merchandiseController@admin_merchandise_delete");
Route::POST("admin_agent_delete","Admin_agentController@admin_agent_delete");




//***************** merchandise ******************//
Route::get("merchandise","MerchandiseController@index")->middleware('test');
Route::get("merchandise_product/{id}","MerchandiseproductController@merchandise_product")->middleware('test');
Route::post("merchandis/product_add","MerchandiseproductController@product_add")->middleware('test');
Route::post("merchandis/store","MerchandiseproductController@product_store")->middleware('test');
Route::get("cancel_product_add","MerchandiseproductController@cancel_product_add")->middleware('test');
Route::get("m_all_product_details/{id}","MerchandiseproductController@m_all_product_details")->middleware('test');
Route::get("merchandis_product_list","MerchandiseController@merchandis_product_list")->middleware('test');
Route::post("m_p_send_agent_status/{id}","MerchandiseController@m_p_send_agent_status")->middleware('test');

Route::get("merchandise_product_profit","MerchandiseController@merchandise_product_profit")->middleware('test');

Route::get("merchandise_p_profit_details/{id}","MerchandiseController@merchandise_p_profit_details")->middleware('test');

Route::post("merchandise_r_express_paid_recieved/{id}","MerchandiseController@merchandise_r_express_paid_recieved")->middleware('test');



Route::get("merchandise_profile/{id}","MerchandiseController@merchandise_profile")->middleware('test');
Route::post("merchandise_edit/{id}","MerchandiseController@merchandise_edit")->middleware('test');
//***************** customer ******************//

Route::resource("customer","CustomerController")->middleware('test');


//***************** delivery man ******************//

Route::resource("delivery_man","DeliveryController")->middleware('test');
Route::get("agent_pickup_list/{id}","DeliveryController@agent_pickup_list")->middleware('test');
Route::get("agent_delivery_list/{id}","DeliveryController@agent_delivery_list")->middleware('test');
Route::post("agent_delivery_hold/{id}","DeliveryController@agent_delivery_hold")->middleware('test');
Route::post("a_p_recieve_merchandise_status/{id}","DeliveryController@a_p_recieve_merchandise_status")->middleware('test');
Route::post("agent_delivery_status/{id}","DeliveryController@agent_delivery_status")->middleware('test');

Route::get("agent_profile/{id}","DeliveryController@agent_profile")->middleware('test');
Route::post("agent_edit/{id}","DeliveryController@agent_edit")->middleware('test');