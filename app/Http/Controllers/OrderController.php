<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Product;
use App\Models\Cart;

class OrderController extends Controller
{
    //
    public function addToCart(Request $request)
    {
         
        //  dd($request);

        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->first();

        $product = $request->get('product_id');
       
            // Store in Pivote
         

        $cart->products()
            ->attach([$product => ['quantity' => $request->get('quantity'), 'cart_id' => $cart->id]]);
        

        return redirect('/cart')->with('success', 'order saved!');

        
    
    }

    public function GetCartData()
    {
            $user = Auth::user();
            // dd($user->id);
            // array of carts
            $cart = DB::table('carts')->where
            ([
                ['user_id', $user->id],
                ['is_ordered', 0]
            ])->first();
                // dd($cart);
            // $quantity[] = '';

            // print_r($cart->products);
            $product = Cart::find($cart->id)->products()->get();

           

        //     echo '<pre>';
        //     print_r($product);
        //     echo '</pre>';
            return view('dashboard.cart');
    }

    public function confirm()
    {
        $user = Auth::user();
        // dd($user->id);

        $carts = DB::table('carts')->where
            ([
                ['user_id', $user->id],
                ['is_ordered', 0]
            ])->first();
                // dd($carts);
                
        $carts->is_ordered = '1';

        $carts->save();

    }

}
