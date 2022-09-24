<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
   public function index(){
    return view('index');
   }
   public function home(){
    return view('content');
   } 
   public function login(){
    return view('login');
   }
   public function register(){
      
    return view('register');
   }
   public function forgot(){
    return view('forgotpaswrd');
   }
   public function recover(){
      return view('recover');
   }
   public function table(){
      $products=Product::all();
      // return $users->name;
      
      return view('table',compact('products'));
   }
   public function delete_product($id){
        Product::find(decrypt($id))->delete();
      return redirect('table');
   }
   public function edit_product($id){
    $products=Product::find(decrypt($id));
    return view('edit_product',compact('products'));  
   }
   public function update_product(){
     $pid=request('p_id');
     $pro=Product::find($pid);
     $pro->update([
      'category'=>request('category'),
      'pro_name'=>request('pro_name'),
      'price'=>request('price'),
      'date'=>request('date'),
      'quantity'=>request('quantity'),
      'stock'=>request('stock'),
     ]);
   }
   public function registers(){
      $name = request('name');
      $email = request('email');
      $mobile = request('mobile');
    
      User::create([
         'name'=>$name,
         'email'=>$email,
         'mobile'=>$mobile,
      ]);

   }
   public function form(){
      return view('form');
   }
   public function forms()
   {
      $save_category=request('category');
      
      category::create([
         'category'=>$save_category,
      ]);
   }
  public function product(){
   $categorys=category::all();
   
   return view('product',compact('categorys'));
  }
  public function add_product()
  {
  $category=request('category');
  $name=request('pro_name');
  $price=request('price');
  $date=request('date');
  $quantity=request('quantity');
  $stock=request('stock');
  
  Product::create([
   'category'=>$category,
   'pro_name'=>$name,
   'price'=>$price,
   'exp_date'=>$date,
   'quantity'=>$quantity,
   'stock'=>$stock,

  ]);
 return redirect('Product'); 
}

}


