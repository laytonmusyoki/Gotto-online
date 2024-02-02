<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $items=Products::all();
        return view('Products.products',compact('items'));
    }
    public function cart(Request $request){
        $items=Cart::where('user_id',Auth()->user()->id)->get();
        return view('Products.cart',compact('items'));
    }

    public function cartpost(Request $request){
        $productId = $request->productId;
        $action = $request->action;
        
        $item = Products::find($productId);
    
        if($item){
            $user_id=auth()->user()->id;
            $cartItem = Cart::where('productId', $productId)->where('user_id',$user_id)->first();
            
    
            if($cartItem){
                $cartItem->increment('quantity');
            } else {
                $cartItem = new Cart();
                $cartItem->productId = $productId;
                $cartItem->user_id=Auth()->user()->id;
                $cartItem->name = $item->name;
                $cartItem->price = $item->selling;
                $cartItem->quantity = 1;
                $cartItem->image = $item->image;
                $cartItem->save();
            }
        }
    }
    
}
