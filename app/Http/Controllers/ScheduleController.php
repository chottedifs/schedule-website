<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trx_schedule;
use App\Models\trx_teacher;

class ScheduleController extends Controller
{
    public function classXSchedule() {
        $teacher = trx_teacher::where('m_class_id', 1)->get();
        $schedule = trx_schedule::where('m_class_id', 1)->first();
        return view('pages.jadwal', [
            'jadwal' => $schedule,
            'guru' => $teacher
        ]);
    }

    public function classXiSchedule() {
        $teacher = trx_teacher::where('m_class_id', 2)->get();
        $schedule = trx_schedule::where('m_class_id', 2)->first();
        return view('pages.jadwal', [
            'jadwal' => $schedule,
            'guru' => $teacher
        ]);
    }

    public function classXiiSchedule() {
        $teacher = trx_teacher::where('m_class_id', 3)->get();
        $schedule = trx_schedule::where('m_class_id', 3)->first();
        return view('pages.jadwal', [
            'jadwal' => $schedule,
            'guru' => $teacher
        ]);
    }

    public function practiceSchedule() {
        $teacher = trx_teacher::where('m_class_id', 4)->get();
        $schedule = trx_schedule::where('m_class_id', 4)->first();
        return view('pages.jadwal', [
            'jadwal' => $schedule,
            'guru' => $teacher
        ]);
    }
}
