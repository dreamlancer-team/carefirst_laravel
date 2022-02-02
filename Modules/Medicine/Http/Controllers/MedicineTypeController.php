<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Medicine\Entities\MedicineType;
use Modules\Medicine\Http\Requests\StoreMedicineTypeRequest;
use Modules\Medicine\Http\Requests\UpdateMedicineTypeRequest;

class MedicineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine_types = MedicineType::withCount('medicines')->get();
        return view('medicine::medicine-type.index', compact('medicine_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Modules\Medicine\Http\Requests\StoreMedicineTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineTypeRequest $request)
    {
        if ($request->validated()) {
            MedicineType::create([
                'name' => $request->name,
                'slug' => slug($request->name),
                'status' => 1,
                'user_id' => getLoggedInUserId(),
            ]);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Modules\Medicine\Http\Requests\UpdateMedicineTypeRequest  $request
     * @param  \App\Entities\MedicineType  $type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineTypeRequest $request, MedicineType $type)
    {
        if ($request->validated()) {
            $type->update([
                'name' => $request->name,
                'slug' => slug($request->name),
                'status' => 1,
                'user_id' => getLoggedInUserId(),
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\MedicineType  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineType $type)
    {
        $type->delete();

        return back();
    }
}
