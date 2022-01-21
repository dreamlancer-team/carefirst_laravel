<?php

namespace App\Http\Controllers;

use App\Models\MedicineBrand;
use App\Http\Requests\StoreMedicineBrandRequest;
use App\Http\Requests\UpdateMedicineBrandRequest;

class MedicineBrandController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicineBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineBrand $medicineBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineBrand $medicineBrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineBrandRequest  $request
     * @param  \App\Models\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineBrandRequest $request, MedicineBrand $medicineBrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineBrand $medicineBrand)
    {
        //
    }
}
