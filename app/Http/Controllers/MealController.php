<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Meal;
use App\Order;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;

class MealController extends Controller
{
    // authentication
    public function __construct()
    {
        $this->middleware('auth')->only(['goToCheckout','postCheckout']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('welcome', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
        $meal = Meal::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addItem($meal, $meal->id);
        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect('/');
    }

    public function goToCart()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['meals' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function removeFromCart(Request $request, $id)
    {
        
    }

    public function goToCheckout()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect('thankyou');
    }

    public function orderConfirm()
    {
        return view('thankyou');
    }

    // get all user orders
    public function getUserOrders() {
        $orders = Order::all();
        $users = User::all();
        $orders -> transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
         });
        return view('admin', ['orders' => $orders, 'users']);
    }
}
