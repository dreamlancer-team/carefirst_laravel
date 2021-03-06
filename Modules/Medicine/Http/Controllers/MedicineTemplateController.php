<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicineTemplateRequest;
use App\Http\Requests\UpdateMedicineTemplateRequest;
use Modules\Medicine\Entities\MedicineTemplate;

class MedicineTemplateController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicineTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineTemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\MedicineTemplate  $medicineTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineTemplate $medicineTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\MedicineTemplate  $medicineTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineTemplate $medicineTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineTemplateRequest  $request
     * @param  \App\Entities\MedicineTemplate  $medicineTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineTemplateRequest $request, MedicineTemplate $medicineTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\MedicineTemplate  $medicineTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineTemplate $medicineTemplate)
    {
        //
    }
}
