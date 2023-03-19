<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_organisasi;
use Storage;

class M_organisasi_controller extends Controller
{
    public function index()
    {
        $organisasi = m_organisasi::all();

        return view('pages.admin.organisasi.index', [
            'organisasi' => $organisasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        $organisasi = new m_organisasi;
        $organisasi->image = $request->file('image')->store('images/organisasi', 'public');

        $organisasi->save();

        return redirect(route('admin.organisasi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisasi = m_organisasi::findOrFail($id);

        return view('pages.admin.organisasi.edit', [
            'organisasi' => $organisasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        if ($request->hasFile('image')) {
            if($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
        }

        $organisasi = m_organisasi::find($id);

        $organisasi->image = $request->file('image')->store('images/organisasi', 'public');

        $organisasi->save();

        return redirect(route('admin.organisasi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisasi = m_organisasi::findOrFail($id);

        Storage::disk('public')->delete($organisasi->image);

        $organisasi->destroy($id);

        return redirect(route('admin.organisasi.index'));
    }
}
