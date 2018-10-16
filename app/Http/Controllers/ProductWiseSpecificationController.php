<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductWiseSpecificationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Categorys
        $productWiseSpecifications = ProductWiseSpecification::orderBy('created_at', 'desc')->Where('active', 1)->paginate(10);

        // Return collection of Categorys as a resource
        return ProductWiseSpecificationResouerce::collection($productWiseSpecifications);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input('data');
        if(count($data))
        {
            ProductWiseSpecification::where('category_id',$data[0]['category_id'])->delete();
        }
        ProductWiseSpecification::insert($request->input('data'));
    }
    /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Categorys
        $productWiseSpecification = ProductWiseSpecification::findOrFail($id);

        // Return single Categorys as a resource
        return new ProductWiseSpecificationResouerce($productWiseSpecification);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Categorys
        $productWiseSpecification = ProductWiseSpecification::findOrFail($id);

        if($productWiseSpecification->delete()) {
            return new ProductWiseSpecificationResouerce($productWiseSpecification);
        }    
    }
}
