<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Products
        $products = Product::orderBy('created_at', 'desc')->Where('active', 1)->paginate(10);

        // Return collection of Products as a resource
        return ProductResource::collection($products);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request)
        // $product = $request->isMethod('put') ? Product::findOrFail($request->id) : new Product;

        // $product->name= $request->input('name');
        // $product->description= $request->input('description');
        // $product->active= $request->input('active');
        // $product->created_by= $request->input('created_by');
        // $product->updated_by= $request->input('updated_by');
        // if($product->save()) {
        //     return new ProductResource($product);
        // }
    }


    /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Products
        $product = Product::findOrFail($id);

        // Return single Products as a resource
        return new ProductResource($product);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Products
        $product = Product::findOrFail($id);

        if($product->delete()) {
            return new ProductResource($product);
        }    
    }
}
