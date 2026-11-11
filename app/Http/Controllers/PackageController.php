<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index() {
        return Package::all();
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'capacity' => 'required|integer',
            'backgrounds' => 'required|string',
            'features' => 'required|string',
        ]);
        return Package::create($request->all());
    }

    public function show($id) {
        return Package::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $package = Package::findOrFail($id);
        $package->update($request->all());
        return $package;
    }

    public function destroy($id) {
        $package = Package::findOrFail($id);
        $package->delete();
        return response()->noContent();
    }
}