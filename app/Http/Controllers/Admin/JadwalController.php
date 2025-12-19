<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index() {
        return view('admin.jadwal.index', [
            'data' => Jadwal::orderBy('hari')->orderBy('waktu')->get()
        ]);
    }

    public function create() {
        return view('admin.jadwal.create');
    }

    public function store(Request $r) {
        $data = $r->validate([
            'hari' => 'required',
            'waktu' => 'required',
            'status' => 'required'
        ]);

        Jadwal::create($data);
        return redirect('/admin/jadwal');
    }

    public function edit($id) {
        return view('admin.jadwal.edit', [
            'data' => Jadwal::find($id)
        ]);
    }

    public function update(Request $r, $id) {
        Jadwal::where('id_jadwal', $id)->update($r->except('_token'));
        return redirect('/admin/jadwal');
    }

    public function destroy($id) {
        Jadwal::where('id_jadwal', $id)->delete();
        return back();
    }
}
