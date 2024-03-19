<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Budget;
use App\Models\Region;
use App\Services\RegionService;

class RegionController extends Controller
{

    public function index()
    {
      $regions = (new RegionService())->listRegion();

      return view('region.index')
          ->with('regions', $regions);
    }

    public function create()
    {
        return view('region.create');
    }


    public function store(RegionRequest $request, Region $region)
    {
        (new RegionService())->saveRegion($request, $region);

        return redirect(route('region.index'));

    }

    public function show(Region $region)
    {
        return view('region.show')
            ->with('region', $region);
    }

    public function edit(Region $region)
    {
        return view('region.edit')
            ->with('region', $region);
    }

    public function update(RegionRequest $request, Region $region)
    {
        (new RegionService())->updateRegion($request, $region);

        return redirect(route('region.index'));
    }

    public function destroy(Region $region)
    {
        if(Budget::where('region', $region->id)->exists()){

            return redirect(route('region.index'));
        }

        (new RegionService())->destroyRegion($region);
        return redirect(route('region.index'));
    }
}
