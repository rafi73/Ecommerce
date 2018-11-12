<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Orders
        $orders = Order::orderBy('created_at', 'desc')->Where('active', 1)->paginate(10);

        // Return collection of Orders as a resource
        return OrderResource::collection($orders);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;

        $order->customer_id= $request->input('customer_id');
        $order->discount= 0;
        $order->total= $request->input('total');
        $order->save();

        $orderDetails = $request->input('details');

        foreach ($orderDetails as $key => $value) 
        {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $value['id'];
            $orderDetail->quantity = $value['quantity'];
            $orderDetail->save();
        }
        
        
    }


    /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Orders
        $order = Order::findOrFail($id);

        // Return single Orders as a resource
        return new OrderResource($order);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Orders
        $order = Order::findOrFail($id);

        if($order->delete()) {
            return new OrderResource($order);
        }    
    }

    /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $order = Order::where('email', $email)->first();

        // Check if sale password is correct
        if (Hash::check($password, $order->password)) 
        {
            return new OrderResource($order);
        }
        
        return null;   
        
    }
}
