<?php

namespace App\Http\Controllers;

use App\Models\CDM_STG_FF_MSAR;
use App\Http\Resources\MSARResource;
use Illuminate\Http\Request;

class CDMSTGFFMSARController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse('Products successfully fetched.', MSARResource::collection(CDM_STG_FF_MSAR::all()));
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
     * @param  \App\Models\CDM_STG_FF_MSAR  $cDM_STG_FF_MSAR
     * @return \Illuminate\Http\Response
     */
    public function show(CDM_STG_FF_MSAR $cDM_STG_FF_MSAR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CDM_STG_FF_MSAR  $cDM_STG_FF_MSAR
     * @return \Illuminate\Http\Response
     */
    public function edit(CDM_STG_FF_MSAR $cDM_STG_FF_MSAR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CDM_STG_FF_MSAR  $cDM_STG_FF_MSAR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CDM_STG_FF_MSAR $cDM_STG_FF_MSAR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CDM_STG_FF_MSAR  $cDM_STG_FF_MSAR
     * @return \Illuminate\Http\Response
     */
    public function destroy(CDM_STG_FF_MSAR $cDM_STG_FF_MSAR)
    {
        //
    }

    // public function index()
    // {
    //     return $this->successResponse('Products successfully fetched.', ProductResource::collection(Product::all()));
    // }


    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'description' => 'required',
    //         'price' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         return $this->errorResponse('Error validation.', $validator->errors());       
    //     }

    //     return $this->successResponse('Post successfully created.', new ProductResource(
    //         Product::create($validator->validated())
    //     ));
    // }


    // public function show($id)
    // {
    //     $product = Product::find($id);

    //     if (is_null($product)) {
    //         return $this->errorResponse('Product does not exist.');
    //     }
    //     return $this->successResponse('Product successfully fetched.', new ProductResource($product));
    // }


    // public function update(Request $request, Product $product)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'description' => 'required',
    //         'price' => 'required'
    //     ]);

    //     if($validator->fails()){
    //         return $this->errorResponse('Error validation.', $validator->errors());       
    //     }

    //     $input = $validator->validated();

    //     $product->title = $input['title'];
    //     $product->description = $input['description'];
    //     $product->price = $input['price'];
    //     $product->save();

    //     return $this->successResponse('Product successfully updated.', new ProductResource($product));
    // }

    // public function destroy($id)
    // {
    //     $product = Product::find($id);

    //     if (is_null($product)) {
    //         return $this->errorResponse('Product does not exist.');
    //     }

    //     $product->delete();

    //     return $this->successResponse('Product successfully deleted.');
    // }
}
