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
        //
        $mode = $request->input('hub_mode');
        $token = $request->input('hub_verify_token');
        $challenge = $request->input('hub_challenge');
        // echo $mode;
        // echo $token;
        return $challenge;



        //get; json
        return StsFbmModel::all();
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
        //
        $mode = $request->input('hub_mode');
        $token = $request->input('hub_verify_token');
        $challenge = $request->input('hub_challenge');
        // echo $mode;
        // echo $token;
        return $challenge;


        // Ito for specific targetting ng posted data or ibang pangalan ng posted data compared sa table column name
        // example 'name_user' ang posted data sa table mo 'name' lang.
        // $stsfbmModel = new StsFbmModel();
        // $stsfbmModel->name=$request->input('name');
        // $stsfbmModel->name=$request->input('description');

        // $stsfbmModel->save();

        // Gamitin lang ito kapag ang value na pinapasa mo or input data ay kapareho ng mga table column mo.
        // Example: ang pinasa mong data ay may 'name' dapat yung sa table mo 'name' din ang column
        // StsFbmModel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        //
        $mode = $request->input('hub_mode');
        $token = $request->input('hub_verify_token');
        $challenge = $request->input('hub_challenge');
        // echo $mode;
        // echo $token;
        return $challenge;

        
        // return StsFbmModel::find($stsFbmModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StsFbmModel $stsFbmModel)
    {
        //
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
        //
        StsFbmModel::where('id', $id)
            ->update(['name' => $request->input('name'), 'description' => $request->input('description')]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StsFbmModel  $stsFbmModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        StsFbmModel::find($id)->delete();
    }
}
