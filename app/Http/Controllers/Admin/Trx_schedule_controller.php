<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_class;
use App\Models\trx_schedule;
use Storage;

class Trx_schedule_controller extends Controller
{
    public function index()
    {
        $schedule = trx_schedule::all();

        return view('pages.admin.jadwal.index', [
            'jadwal' => $schedule
        ]);
    }

    public function create()
    {
        $class = m_class::all();

        return view('pages.admin.jadwal.create', [
            'kelas' => $class
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'm_class_id' => ['required'],
            'schedule' => ['required']
        ]);

        $schedule = new trx_schedule;

        $schedule->m_class_id = $request->input('m_class_id');
        $schedule->schedule = $request->file('schedule')->store('file/schedule', 'public');

        $schedule->save();

        return redirect(route('admin.jadwal.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $schedule = trx_schedule::findOrFail($id);
        $class = m_class::all();

        return view('pages.admin.jadwal.edit', [
            'jadwal' => $schedule,
            'kelas' => $class
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'm_class_id' => ['required'],
            'schedule' => ['required']
        ]);

        if ($request->hasFile('schedule')) {
            if($request->oldSchedule) {
                Storage::disk('public')->delete($request->oldSchedule);
            }
        }

        $schedule = trx_schedule::find($id);

        $schedule->m_class_id = $request->input('m_class_id');
        $schedule->schedule = $request->file('schedule')->store('file/schedule', 'public');

        $schedule->save();

        return redirect(route('admin.jadwal.index'));
    }

    public function destroy($id)
    {
        $schedule = trx_schedule::findOrFail($id);

        Storage::disk('public')->delete($schedule->schedule);

        $schedule->destroy($id);

        return redirect(route('admin.jadwal.index'));
    }
}
