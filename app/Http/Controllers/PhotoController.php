<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        return Photo::all();
    }

    public function store(Request $request) {
        $request->validate([
            'image' => 'required|string',
            'category' => 'required|string',
        ]);
        return Photo::create($request->all());
    }

    public function show($id) {
        return Photo::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $photo = Photo::findOrFail($id);
        $photo->update($request->all());
        return $photo;
    }

    public function destroy($id) {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return response()->noContent();
    }
}