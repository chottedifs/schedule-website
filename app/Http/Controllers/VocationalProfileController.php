<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_activity;
use App\Models\trx_gallery;
use App\Models\m_organisasi;
use Storage;

class VocationalProfileController extends Controller
{
    public function visi() {
        return view('pages.visi');
    }

    public function gallery() {
        // ddd($activity);
        $activity = m_activity::all();

        $gallery = trx_gallery::all();

        // ddd($gallery);
        return view('pages.galeri', [
            'aktifitas' => $activity,
            'galeri' => $gallery
        ]);
    }

    public function organisasi() {
        $organisasi = m_organisasi::all();

        return view('pages.organisasi', [
            'organisasi' => $organisasi
        ]);
    }
}
