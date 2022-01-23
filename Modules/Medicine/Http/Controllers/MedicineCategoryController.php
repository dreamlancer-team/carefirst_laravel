<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicineCategoryRequest;
use App\Http\Requests\UpdateMedicineCategoryRequest;
use Modules\Medicine\Entities\MedicineCategory;

class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine_categories = MedicineCategory::withCount('medicines')->get();
        return view('medicine::medicine-category.index', compact('medicine_categories'));
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
     * @param  \App\Http\Requests\StoreMedicineCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineCategoryRequest  $request
     * @param  \App\Entities\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineCategoryRequest $request, MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineCategory $medicineCategory)
    {
        //
    }
}
