<?php

namespace App\Services;
use App\Http\Requests\RegionRequest;
use App\Models\Region;

class RegionService
{

    public function list()
    {
        return Region::all();
    }

    public function save(RegionRequest $request, Region $region)
    {
        $region->fill($request->all());
        return $region->save();
    }

    public function delete(Region $region)
    {
        return $region->delete();
    }

}
