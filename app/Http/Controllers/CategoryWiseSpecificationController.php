<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryWiseSpecification;
use App\Specification;
use App\Http\Resources\CategoryWiseSpecificationResouerce;

class CategoryWiseSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Categorys
        $categories = CategoryWiseSpecification::orderBy('created_at', 'desc')->Where('active', 1)->paginate(10);

        // Return collection of Categorys as a resource
        return CategoryWiseSpecificationResouerce::collection($categories);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $categoryWiseResource = $request->isMethod('put') ? CategoryWiseSpecification::findOrFail($request->id) : new CategoryWiseSpecification;

        // $categoryWiseResource->category_id= $request->input('category_id');
        // $categoryWiseResource->specification_id= $request->input('specification_id');
        // $categoryWiseResource->created_by= $request->input('created_by');
        // $categoryWiseResource->updated_by= $request->input('updated_by');
        // if($categoryWiseResource->save()) {
        //     return new CategoryWiseSpecificationResouerce($categoryWiseResource);
        // }

        CategoryWiseSpecification::insert($request->input('data'));
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
        $categoryWiseResource = CategoryWiseSpecification::findOrFail($id);

        // Return single Categorys as a resource
        return new CategoryWiseSpecificationResouerce($categoryWiseResource);
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
        $categoryWiseResource = CategoryWiseSpecification::findOrFail($id);

        if($categoryWiseResource->delete()) {
            return new CategoryWiseSpecificationResouerce($categoryWiseResource);
        }    
    }

    /**
     * Display a listing of the resource with requested parameters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCategoryData(Request $request)
    {
         // Get Kawarabis
         $search = $request->input('search');
         $kawarabis = CategoryWiseSpecification::Where('subject', 'like', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(10);
 
         // Return collection of Kawarabis as a resource
         return CategoryWiseSpecificationResouerce::collection($kawarabis);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getCategoryDataFront()
     {
        // Get Categorys
        $categories = CategoryWiseSpecification::orderBy('updated_at', 'desc')->Where('deactivate', 0)->take(4)->get();

        foreach($categories as $categoryWiseResource)
        {
            $files = explode(",", $categoryWiseResource['file']);
            $categoryWiseResource['attachments'] =  Attachment::WhereIn('id', $files)->get();
        }
 
         // Return collection of Categorys as a resource
         return CategoryWiseSpecificationResouerce::collection($categories);
     }

     /**
     * Display the specified resource.
     *$
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCategoryWiseSpecification($categoryId)
    {
        // Get Categorys
        $categoryWiseResource = Specification::leftJoin('category_wise_specifications', 'specifications.id', '=', 'category_wise_specifications.specification_id')
                                                //->where('category_wise_specifications.category_id', $categoryId)
                                                ->get();

        // Return single Categorys as a resource
        return response()->json(['data' => $categoryWiseResource]);
    }
}
