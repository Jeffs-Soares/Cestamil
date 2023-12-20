<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index(int $id)
    {
        $region = Region::find($id);
        dd($region);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(Region $region)
    {

    }


    public function edit(Region $region)
    {

    }


    public function update(Request $request, Region $region)
    {

    }

    public function destroy(Region $region)
    {

    }
}
