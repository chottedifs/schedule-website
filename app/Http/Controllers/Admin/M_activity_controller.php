<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_activity;

class M_activity_controller extends Controller
{
    public function index()
    {
        $activity = m_activity::all();

        return view('pages.admin.master-aktifitas.index', [
            'aktifitas' => $activity
        ]);
    }

    public function create()
    {
        return view('pages.admin.master-aktifitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => ['required', 'string', 'max:100'],
        ]);

        $activityName = new m_activity;

        $activityName->activity_name = $request->input('activity_name');

        $activityName->save();

        return redirect(route('admin.master-aktifitas.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $activityName = m_activity::findOrFail($id);

        return view('pages.admin.master-aktifitas.edit', [
            'aktifitas' => $activityName
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'activity_name' => ['required', 'string', 'max:100'],
        ]);

        $activityName = m_activity::find($id);

        $activityName->activity_name = $request->input('activity_name');

        $activityName->save();

        return redirect(route('admin.master-aktifitas.index'));
    }

    public function destroy($id)
    {
        $activityName = m_activity::findOrFail($id);

        $activityName->destroy($id);

        return redirect(route('admin.master-aktifitas.index'));
    }
}
