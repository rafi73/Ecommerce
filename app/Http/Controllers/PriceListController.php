<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUploadData(Request $request)
    {
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName();

            if (!file_exists(public_path() . '/uploads/price-list' )) {
                mkdir(public_path().'/uploads/price-list', 0777, true);
            }


            $path = public_path().'/uploads/price-list';
            $uplaod = $file->move($path, $fileName);
        }   

        return response()->json(['data' => "Successfully sent to server!"]); 
    }

}
