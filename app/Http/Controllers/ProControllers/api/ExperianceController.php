<?php

namespace App\Http\Controllers\ProControllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\experianceStoreRequest;
use App\Http\Requests\api\experianceUpdateRequest;
use App\Http\Resources\ExperianceResources;
use App\Models\Experiance;
use Illuminate\Http\Request;

class ExperianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  ExperianceResources::collection(Experiance::get());
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
    public function store(experianceStoreRequest $request)
    {
        Experiance::create([
            Experiance::NAME => $request->name,
            Experiance::HOURLY_PRICE => $request->price,
        ]);

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Experiance $experiance)
    {
        return response()->json(['name' => $experiance->getName(), 'price' => $experiance->getPrice()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(experianceUpdateRequest $request, $id)
    {
        Experiance::findOrFail($id)->update([
            Experiance::NAME => $request->name,
            Experiance::HOURLY_PRICE => $request->price
        ]);

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experiance $experiance)
    {
        $experiance->delete();
        
        return response()->noContent();
    }
}
