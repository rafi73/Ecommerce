<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductWiseSpecification;
use App\Http\Resources\ProductResource;
use App\Helpers\ImageProcessing;

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
        $product = $request->isMethod('put') ? Product::findOrFail($request->id) : new Product;

        $product->name= $request->input('name');
        $product->category_id= $request->input('category_id');
        $product->sub_category_id= $request->input('sub_category_id');
        $product->brand_id= $request->input('brand_id');
        $product->description= $request->input('description');
        $product->image= $request->input('image')? ImageProcessing::saveBase64ImagePng($request->input('image')) : NULL;
        $product->reference= $request->input('reference');
        $product->condition= $request->input('description');
        $product->price= $request->input('price');
        $product->discount_price= $request->input('discount_price');
        $product->more_info= $request->input('more_info');
        $product->inside_box= $request->input('inside_box');
        $product->active= $request->input('active');
        $product->created_by= $request->input('created_by');
        $product->updated_by= $request->input('updated_by');

        if($product->save()) {
            $specifications = $request->input('specification');
            foreach ($specifications as $key => $value) 
            {
                $productWiseSpecification = new ProductWiseSpecification;
                $productWiseSpecification->product_id = $product->id;
                $productWiseSpecification->specification_id = $key;
                $productWiseSpecification->description = $value;
                $productWiseSpecification->created_by = $request->input('created_by');
                $productWiseSpecification->updated_by = $request->input('updated_by');
                $productWiseSpecification->save();
            }

            return new ProductResource($product);
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