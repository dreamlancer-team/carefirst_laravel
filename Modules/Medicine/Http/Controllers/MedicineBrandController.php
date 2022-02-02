<?php

namespace Modules\Medicine\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Medicine\Entities\MedicineBrand;
use Modules\Medicine\Http\Requests\StoreMedicineBrandRequest;
use Modules\Medicine\Http\Requests\UpdateMedicineBrandRequest;

class MedicineBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine_brands = MedicineBrand::withCount('medicines')->get();
        return view('medicine::medicine-brand.index', compact('medicine_brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Modules\Medicine\Http\Requests\StoreMedicineBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineBrandRequest $request)
    {
        if ($request->validated()) {
            MedicineBrand::create([
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
     * @param  \Modules\Medicine\Http\Requests\UpdateMedicineBrandRequest  $request
     * @param  \Modules\Medicine\Entities\MedicineBrand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineBrandRequest $request, MedicineBrand $brand)
    {
        if ($request->validated()) {
            $brand->update([
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
     * @param  \Modules\Medicine\Entities\MedicineBrand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineBrand $brand)
    {
        $brand->delete();

        return back();
    }
}
