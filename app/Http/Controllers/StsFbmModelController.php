<?php

namespace App\Http\Controllers;

use App\Models\StsFbmModel;
use App\Http\Requests\StoreStsFbmModelRequest;
use App\Http\Requests\UpdateStsFbmModelRequest;
use Illuminate\Http\Request;

class StsFbmModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StoreStsFbmModelRequest $request)
    {
        //Retrieve value from query parameters
        $mode = $request->input('hub_mode');
        $token = $request->input('hub_verify_token');
        $challenge = $request->input('hub_challenge');
        return $challenge;
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
     * @param  \App\Http\Requests\StoreStsFbmModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStsFbmModelRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StsFbmModel $stsFbmModel)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStsFbmModelRequest  $request
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
