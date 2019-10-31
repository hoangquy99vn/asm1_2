<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $product = Product::all();
        return view('page.home', ['product'=>$product]);
    }

    public function getShop(){
        return view('page.shop');
    }

    public function getProduct_single(Request $req){
        $product_single = Product::where('id');
        return view('page.product_single',compact('product_single'));
    }

    
    public function getCheckout(){
        return view('page.checkout');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getBlog(){
        return view('page.blog');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getDangky(){
        return view('page.dangky');
    }

    public function getAddtoCart(Request $req, $id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    
    public function getCart(){
        if(!Session::has('cart')) {
            return view('page.cart', ['product_cart'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('page.cart', ['product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);;
    }

   
}