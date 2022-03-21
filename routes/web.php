<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\SliderController;

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

Route::get('/' , [mainController::class,'index']);
Route::get('/all_products' , [mainController::class,'all_products']);
Route::get('/productdetail' , [mainController::class,'productdetail']);
Route::get('/product404' , [mainController::class,'product404']);
Route::get('/contact' , [mainController::class,'contact']);

Route::post('/contact_message', [mainController::class,'contact_message']);
Route::get('/contact_email', [ContactController::class,'contact_email']);
Route::get('/seen_email/{id}', [ContactController::class,'seen_email']);
Route::get('/delete_email/{id}', [ContactController::class,'delete_email']);
// 

Route::get('/search_product' , [mainController::class,'search_product']);

Route::get('/product_detail/{id}' , [mainController::class,'product_detail']);
Route::post('/add_to_cart/{id}' , [mainController::class,'add_to_cart']);
Route::get('/cartcount' , [mainController::class,'cartcount']);
Route::get('/cart' , [mainController::class,'cart_view']);
Route::patch('/update_item' , [mainController::class,'update_item']);
Route::get('/delet_item/{id}' , [mainController::class,'delet_item']);
Route::get('/cart_empty' , [mainController::class,'cart_empty']);


Route::get('/checkout' , [mainController::class,'checkout']);

Route::get('/registor_account' , [mainController::class,'registor_account']);
Route::post('/place_order' , [mainController::class,'place_order']);




Route::get('/adminlogin' , [mainController::class,'adminlogin']);
Route::post('/admin_login' , [mainController::class,'admin_login']);
Route::get('/logoutuser' , [mainController::class,'logoutuser']);






// admin dashboard section 

Route::get('/admindashboard',[AdmindashboardController::class,'index']);
Route::get('/admin_list',[AdmindashboardController::class,'admin_list']);
Route::get('/edit_admin/{id}',[AdmindashboardController::class,'edit_admin']);
Route::post('/update_admin',[AdmindashboardController::class,'update_admin']);

// product section
Route::get('/products',[productController::class,'list']);
Route::get('/add_product',[productController::class,'add']);
Route::post('/insert_product',[productController::class,'insert_product']);
Route::get('/edit_product/{id}',[productController::class,'edit']);
Route::post('/update_product',[productController::class,'update_product']);
Route::get('/veiw_product_related_images/{id}',[productController::class,'veiw_product_related_images']);
Route::get('/product_enable/{id}',[productController::class,'product_enable']);
Route::get('/product_disable/{id}',[productController::class,'product_disable']);
Route::get('/delete_product/{id}',[productController::class,'delete_product']);

// end product section

///// order view and place by admin side section
Route::get('/order_list',[OrderController::class,'list']);
Route::get('/customer_detail/{id}',[OrderController::class,'customer_detail']);
Route::get('/view_order_detail/{id}',[OrderController::class,'view_order_detail']);
Route::get('/order_cencle',[OrderController::class,'order_cencle']);
// this bottom rout for specific order cencle by admin
Route::get('/order_cencel/{id}',[OrderController::class,'order_cencel']);



// order dilever process assgined by admin
Route::get('/in_progress/{id}',[OrderController::class,'in_progress']);
Route::get('/deliverd/{id}',[OrderController::class,'deliverd']);

// order delivery charges setup
Route::post('/add_delivery_charge',[OrderController::class,'add_delivery_charge']);

// statictical data count 

Route::get('/product_count',[CountController::class,'product_count']);
Route::get('/pending_order_count',[CountController::class,'pending_order_count']);
Route::get('/deliverd_order',[CountController::class,'deliverd_order']);
Route::get('/emails',[CountController::class,'emails']);


// slider section
Route::get('/sliders',[SliderController::class,'slider']);
Route::get('/add_slider',[SliderController::class,'add_slider']);
Route::post('/insert_slider',[SliderController::class,'insert_slider']);
Route::get('/edit_slider/{id}',[SliderController::class,'edit_slider']);
Route::post('/update_slider',[SliderController::class,'update_slider']);
Route::get('/delete_slider/{id}',[SliderController::class,'delete_slider']);
Route::get('/slider_enable/{id}',[SliderController::class,'slider_enable']);
Route::get('/slider_disable/{id}',[SliderController::class,'slider_disable']);