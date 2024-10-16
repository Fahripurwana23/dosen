<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dosens = dosen::all();

        // Mengirim data ke view 'dosen.index'
        return view('dosen.index', compact('dosens'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dosen.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
    $request->validate([
        'nidn' => 'required|numeric|unique:dosens,nidn',
        'nama_dosen' => 'required|string|max:255',
        'tgl_mulai_tugas' => 'required|date',
        'bidang_keilmuan' => 'required|string|max:255',
        'foto_dosen' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        'jenjang_pendidikan' => 'required|in:s2,s3',
    ]);

    // Persiapan data dosen
    $datadosen = [
        'nidn' => $request->nidn,
        'nama_dosen' => $request->nama_dosen,
        'tgl_mulai_tugas' => $request->tgl_mulai_tugas,
        'bidang_keilmuan' => $request->bidang_keilmuan,
        'jenjang_pendidikan' => $request->type, // Gunakan name yang sesuai dari form (type)
    ];

    // Mengupload dan menyimpan foto dosen
    if ($request->hasFile('foto_dosen')) {
        $image = $request->file('foto_dosen');
        $nameFile = strtolower(str_replace(' ', '-', $request->nama_dosen)) . '-' . time() . '.' . $image->getClientOriginalExtension();
        $path = 'uploads/foto_dosen/';
        $image->move(public_path($path), $nameFile);
        $datadosen['foto_dosen'] = $path . $nameFile;
    }

    // Menyimpan data ke database
    dosen::create($datadosen);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('dosen.index')->with('success', 'Berhasil menambah data dosen.');
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dosen $dosen)
    {
        //
    }
}
