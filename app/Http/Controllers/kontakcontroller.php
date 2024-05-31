<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; // Pastikan model Kontak di-import

class KontakController extends Controller
{
    // Metode untuk menampilkan data kontak
    public function lihatKontak()
    {
        // Ambil semua data kontak dari database
        $kontaks = Kontak::all();

        // Kembalikan view 'kontak' dan kirim data kontak
        return view('kontak', ['kontaks' => $kontaks]);
    }

    // Metode untuk menyimpan kontak baru
    public function simpan()
    {
        return view('tambah-kontak');
    }

    // Metode untuk menyimpan kontak baru ke database
    public function simpanKontak(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'kodeData' => 'required',
            'unitkerja' => 'required',
            'eselon' => 'required',
            'status' => 'required',
            'pangkat' => 'required',
        ]);

        // Simpan data ke database
        Kontak::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'kodeData' => $request->kodeData,
            'unitkerja' => $request->unitkerja,
            'eselon' => $request->eselon,
            'status' => $request->status,
            'pangkat' => $request->pangkat,
        ]);

        // Redirect atau kembalikan respon sesuai kebutuhan aplikasi
        return redirect('/tambah-kontak')->with('success', 'Data berhasil disimpan');
    }
}
