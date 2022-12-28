<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_class;

class M_class_controller extends Controller
{
    public function index()
    {
        $class = m_class::all();

        return view('pages.admin.master-kelas.index', [
            'kelas' => $class
        ]);
    }

    public function create()
    {
        return view('pages.admin.master-kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_name' => ['required', 'string', 'max:100'],
        ]);

        $className = new m_class;

        $className->class_name = $request->input('class_name');

        $className->save();

        return redirect(route('admin.master-kelas.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $className = m_class::findOrFail($id);

        return view('pages.admin.master-kelas.edit', [
            'kelas' => $className
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => ['required', 'string', 'max:100'],
        ]);

        $className = m_class::find($id);

        $className->class_name = $request->input('class_name');

        $className->save();

        return redirect(route('admin.master-kelas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
