<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\ProductAtrr_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');
        $cart_datas=Cart_model::where('session_id',$session_id)->get();
        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price+=$cart_data->price*$cart_data->quantity;
        }
        return view('frontEnd.cart',compact('cart_datas','total_price'));
    }

    public function addToCart(Request $request){
        $inputToCart=$request->all();
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        if($inputToCart['size']==""){
            return back()->with('message','Selecciona el tamaño');
        }else{
            $stockAvailable=DB::table('product_att')->select('stock','sku')->where(['products_id'=>$inputToCart['products_id'],
                'price'=>$inputToCart['price']])->first();
                $inputToCart['user_email']='rodrigo_vilanova@hotmail.com';
                $session_id=Session::get('session_id');
                if(empty($session_id)){
                    $session_id=str_random(40);
                    Session::put('session_id',$session_id);
                }
                $inputToCart['session_id']=$session_id;
                $sizeAtrr=explode("-",$inputToCart['size']);
                $inputToCart['size']=$sizeAtrr[1];

                $count_duplicateItems=Cart_model::where(['products_id'=>$inputToCart['products_id'],
                    'product_color'=>$inputToCart['product_color'],
                    'size'=>$inputToCart['size']])->count();
                if($count_duplicateItems>0){
                    Cart_model::create($inputToCart);
                    return back()->with('message','Los items fueron agregado correctamente');
                }else{
                    Cart_model::create($inputToCart);
                    return back()->with('message','Agregado al carrito');
                }

        }
    }
    public function deleteItem($id=null){
        $delete_item=Cart_model::findOrFail($id);
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $delete_item->delete();
        return back()->with('message','Eliminado correctamente!');
    }
    public function updateQuantity($id,$quantity){
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $sku_size=DB::table('cart')->select('product_code','size','quantity')->where('id',$id)->first();
        $stockAvailable=DB::table('product_att')->select('stock')->where(['sku'=>$sku_size->product_code,
            'size'=>$sku_size->size])->first();
        $updated_quantity=$sku_size->quantity+$quantity;
        if($stockAvailable->stock>=$updated_quantity){
            DB::table('cart')->where('id',$id)->increment('quantity',$quantity);
            return back()->with('message','Cantidad actualizada');
        }else{
            return back()->with('message','Cantidad no encontrada!');
        }


    }
}
