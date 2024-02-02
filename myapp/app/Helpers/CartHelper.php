<?php
namespace App\Helpers;
use App\Models\Cart;

class CartHelper{
    public static function getCartItemsCount($user_id){
        $cart=Cart::where('user_id',$user_id)->first();
        $count=0;
        if($cart){
            $count +=intval($cart->quantity);
            return $count;
        }
        return $count;
    }
}


