<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Resources\CustomerResource;
use Hash;

class CustomerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Customers
        $customers = Customer::orderBy('created_at', 'desc')->Where('active', 1)->paginate(10);

        // Return collection of Customers as a resource
        return CustomerResource::collection($customers);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;

        $customer->name= $request->input('name');
        $customer->email= $request->input('email');
        $customer->password= bcrypt($request->input('password'));
        $customer->save();

        return new CustomerResource($customer);
    }


    /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Customers
        $customer = Customer::findOrFail($id);

        // Return single Customers as a resource
        return new CustomerResource($customer);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Customers
        $customer = Customer::findOrFail($id);

        if($customer->delete()) {
            return new CustomerResource($customer);
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

        $customer = Customer::where('email', $email)->first();

        if(!$customer)
            return $customer;
        
        // Check if sale password is correct
        if (Hash::check($password, $customer->password)) 
        {
            return new CustomerResource($customer);
        } 
        
    }
}
