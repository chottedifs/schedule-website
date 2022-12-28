<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_activity;
use App\Models\trx_gallery;
use Storage;

class Trx_gallery_controller extends Controller
{
    public function index()
    {
        $gallery = trx_gallery::all();

        return view('pages.admin.gallery.index', [
            'galeri' => $gallery
        ]);
    }

    public function create()
    {
        $activity = m_activity::all();
        return view('pages.admin.gallery.create', [
            'aktifitas' => $activity
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'm_activity_id' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        $gallery = new trx_gallery;

        $gallery->m_activity_id = $request->input('m_activity_id');
        $gallery->image = $request->file('image')->store('images/gallery', 'public');

        $gallery->save();

        return redirect(route('admin.gallery.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $gallery = trx_gallery::findOrFail($id);
        $activity = m_activity::all();

        return view('pages.admin.gallery.edit', [
            'galeri' => $gallery,
            'aktifitas' => $activity
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'm_activity_id' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        if ($request->hasFile('image')) {
            if($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
        }

        $gallery = trx_gallery::find($id);

        $gallery->m_activity_id = $request->input('m_activity_id');
        $gallery->image = $request->file('image')->store('images/gallery', 'public');

        $gallery->save();

        return redirect(route('admin.gallery.index'));
    }

    public function destroy($id)
    {
        //
    }
}
