<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Medicine\Entities\MedicineCategory;
use Modules\Medicine\Http\Requests\StoreMedicineCategoryRequest;
use Modules\Medicine\Http\Requests\UpdateMedicineCategoryRequest;

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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineCategoryRequest $request)
    {
        if ($request->validated()) {
            MedicineCategory::create([
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
     * @param  \App\Http\Requests\UpdateMedicineCategoryRequest  $request
     * @param  \App\Entities\MedicineCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineCategoryRequest $request, MedicineCategory $category)
    {

        if ($request->validated()) {
            $category->update([
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
     * @param  \App\Entities\MedicineCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineCategory $category)
    {
        $category->delete();

        return back();
    }
}
