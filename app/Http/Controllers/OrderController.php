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
         
         // dd($request);

        $cart = new Cart([
            'user_id' => $request->get('user_id'),
            'quantity' => $request->get('quantity')
        ]);

        $cart->save();
        //dd($cart->id);

        $product = DB::table('products')->where('id', $request->get('product_id'))->first();

        // dd($product->price);


        $cart->products()->attach($product->id);
        

        return redirect('/cart')->with('success', 'order saved!');

        
    
    }

    public function GetCartData()
    {
            $user = Auth::user();
            // dd($user->id);
            $data = DB::table('carts')->where('user_id', $user->id)->get();


           return view('dashboard.cart');

    }

    public function confirm()
    {
        // Confirm cart order
        // here just set flag to 1

    }

}