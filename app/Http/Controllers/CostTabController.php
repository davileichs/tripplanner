<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCostTabRequest;
use App\Http\Requests\UpdateCostTabRequest;
use App\Models\CostTab;

class CostTabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCostTabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCostTabRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CostTab  $costTab
     * @return \Illuminate\Http\Response
     */
    public function show(CostTab $costTab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CostTab  $costTab
     * @return \Illuminate\Http\Response
     */
    public function edit(CostTab $costTab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCostTabRequest  $request
     * @param  \App\Models\CostTab  $costTab
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCostTabRequest $request, CostTab $costTab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CostTab  $costTab
     * @return \Illuminate\Http\Response
     */
    public function destroy(CostTab $costTab)
    {
        //
    }
}
