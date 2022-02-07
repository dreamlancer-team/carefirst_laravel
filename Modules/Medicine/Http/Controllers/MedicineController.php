<?php

namespace Modules\Medicine\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Medicine\Entities\Medicine;
use Modules\Medicine\Entities\MedicineBrand;
use Modules\Medicine\Entities\MedicineCategory;
use Modules\Medicine\Entities\MedicineType;
use Modules\Medicine\Http\Requests\StoreMedicineRequest;
use Modules\Medicine\Http\Requests\UpdateMedicineRequest;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::with([
            'medicine_brand:id,name',
            'medicine_category:id,name',
            'medicine_type:id,name',
        ])->get();

        $brands = MedicineBrand::select('id', 'name')->get();
        $categories = MedicineCategory::select('id', 'name')->get();
        $types = MedicineType::select('id', 'name')->get();

        return view('medicine::medicine.index', compact('medicines', 'brands', 'categories', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Modules\Medicine\Http\Requests\StoreMedicineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineRequest $request)
    {

        dd($request->all());
        if ($request->validated()) {
            Medicine::create([
                'name' => $request->name,
                'slug' => slug($request->name),
                'medicine_brand_id' => $request->brand,
                'medicine_category_id' => $request->category,
                'medicine_type_id' => $request->type,
                'user_id' => getLoggedInUserId(),
            ]);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Modules\Medicine\Http\Requests\UpdateMedicineRequest  $request
     * @param  \Modules\Medicine\Entities\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        if ($request->validated()) {
            $medicine->update([
                'name' => $request->name,
                'slug' => slug($request->name),
                'medicine_brand_id' => $request->brand,
                'medicine_category_id' => $request->category,
                'medicine_type_id' => $request->type,
                'user_id' => getLoggedInUserId(),
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\Medicine\Entities\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return back();
    }
}
