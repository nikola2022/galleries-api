<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleriesController extends Controller
{
    public function store(Request $request) {
        return Gallery::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_id' => $request->input('author_id'),
            'images' => $request->input('images'),
        ]);
    }
    public function index() {
        $galleryObject = new Gallery();
        $gallery = $galleryObject->get();
        return $gallery;
    }
    public function show($id) {
        $gallery = Gallery::findOrFail($id);
        return $gallery;
    }
}
