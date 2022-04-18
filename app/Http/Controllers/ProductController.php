<?php

namespace App\Http\Controllers;
use App\HTTP\Models;
use Illuminate\Http\Request;

class ProductController extends Controller
 { 
   //
   public function register(){
return view(Product.register);
}
public function store(Request $request)
{
  $product=new Product();
  $product ->name= $request->name; 
  $product ->unit= $request->unit; 
  $product ->price= $request->price; 
  $product ->quantity= $request->quantity; 
  $is_succes=$product::save();
  if($is_succes)
  echo "recored saved succsesfully";
  else
  echo "something want wrong,
  try again!";
}
}