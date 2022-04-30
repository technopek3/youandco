<?php

namespace App\Http\Controllers\ProControllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\holiday\holidayCreateRequest;
use App\Http\Requests\api\holiday\holidayUpdateRequest;
use App\Http\Resources\HolidayResources;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # add request to index {date start ,end keyword ... } 
        # Service has data paginated by each filter 
       
        return HolidayResources::collection(Holiday::orderBy(Holiday::DATE,'asc')->paginate(2));
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
    public function store(holidayCreateRequest $request)
    {
        Holiday::create([
            Holiday::NAME => $request->name,
            Holiday::DATE => $request->date,
            Holiday::FEE => $request->price,
        ]);
        return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {  
        return response()->json(['name' => $holiday->getName(), 'price' => $holiday->getFee(), 'date' => $holiday->getDate()]);
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
    public function update(holidayUpdateRequest $request, $id)
    {
        Holiday::findOrFail($id)->update([
            Holiday::NAME => $request->name,
            Holiday::DATE => $request->date,
            Holiday::FEE => $request->price,
        ]);
        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return response()->noContent();
    }
}
