<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicineBrandRequest;
use App\Http\Requests\UpdateMedicineBrandRequest;
use Modules\Medicine\Entities\MedicineBrand;

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
     * @param  \App\Entities\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineBrand $medicineBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\MedicineBrand  $medicineBrand
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
     * @param  \App\Entities\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineBrandRequest $request, MedicineBrand $medicineBrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\MedicineBrand  $medicineBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineBrand $medicineBrand)
    {
        //
    }
}
