<?php

namespace App\Services;

use App\Http\Requests\RegionRequest;
use App\Models\Region;

class RegionService
{
    public function listRegion()
    {
        return Region::all();
    }

    public function saveRegion(RegionRequest $request, Region $region)
    {
        $region->fill($request->all());

        return $region->save();
    }

    public function updateRegion(RegionRequest $request, Region $region)
    {
        $region->fill($request->all());

        return $region->save();
    }

    public function destroyRegion(Region $region)
    {
        return $region->delete();
    }

}
