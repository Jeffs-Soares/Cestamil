<?php

namespace App\Http\Controllers;

use App\Http\Model\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index()
    {
      $regions = Region::all();
      return view('region.index')->with('regions', $regions);
    }


    public function create()
    {
        return view('region.create');
    }


    public function store(Request $request)
    {
        $region = Region::create($request->all());

        return redirect(route('region.index'));

    }


    public function show(Region $region)
    {
        return view('region.show')->with('region', $region);
    }


    public function edit(Region $region)
    {
        return view('region.edit')->with('region', $region);
    }


    public function update(Request $request, Region $region)
    {
        $region->fill($request->all());
        $region->save();
        return redirect(route('region.index'));
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return redirect( route('region.index'));
    }
}
