<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trx_teacher;
use App\Models\m_class;
use Storage;

class Trx_teacher_controller extends Controller
{
    public function index()
    {
        $teacherData = trx_teacher::all();

        return view('pages.admin.data-guru.index', [
            'guru' => $teacherData
        ]);
    }

    public function create()
    {
        $class = m_class::all();

        return view('pages.admin.data-guru.create', [
            'kelas' => $class
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'm_class_id' => ['required'],
            'fullname' => ['required', 'string', 'max:100'],
            'institution' => ['required', 'string', 'max:100'],
            'study_program' => ['required', 'string', 'max:100'],
            'graduation_year' => ['required'],
            'subjects' => ['required', 'string', 'max:100'],
            'teaching_class' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        $teacherData = new trx_teacher;

        $teacherData->m_class_id = $request->input('m_class_id');
        $teacherData->fullname = $request->input('fullname');
        $teacherData->institution = $request->input('institution');
        $teacherData->study_program = $request->input('study_program');
        $teacherData->graduation_year = $request->input('graduation_year');
        $teacherData->subjects = $request->input('subjects');
        $teacherData->teaching_class = $request->input('teaching_class');
        $teacherData->email = $request->input('email');
        $teacherData->image = $request->file('image')->store('images/teacher', 'public');

        $teacherData->save();

        return redirect(route('admin.data-guru.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $teacherData = trx_teacher::findOrFail($id);
        $class = m_class::all();

        return view('pages.admin.data-guru.edit', [
            'guru' => $teacherData,
            'kelas' => $class
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'm_class_id' => ['required'],
            'fullname' => ['required', 'string', 'max:100'],
            'institution' => ['required', 'string', 'max:100'],
            'study_program' => ['required', 'string', 'max:100'],
            'graduation_year' => ['required'],
            'subjects' => ['required', 'string', 'max:100'],
            'teaching_class' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,svg|max:500']
        ]);

        if ($request->hasFile('image')) {
            if($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
        }

        $teacherData = trx_teacher::find($id);

        $teacherData->m_class_id = $request->input('m_class_id');
        $teacherData->fullname = $request->input('fullname');
        $teacherData->institution = $request->input('institution');
        $teacherData->study_program = $request->input('study_program');
        $teacherData->graduation_year = $request->input('graduation_year');
        $teacherData->subjects = $request->input('subjects');
        $teacherData->teaching_class = $request->input('teaching_class');
        $teacherData->email = $request->input('email');
        $teacherData->image = $request->file('image')->store('images/teacher', 'public');

        $teacherData->save();

        return redirect(route('admin.data-guru.index'));
    }

    public function destroy($id)
    {
        //
    }
}
