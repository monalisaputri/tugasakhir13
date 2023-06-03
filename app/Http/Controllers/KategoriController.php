<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use Barryvdh\DomPDF\Facade\Pdf;

class KategoriController extends Controller
{
    public function index()
    {
        $data['kategori'] = kategori::all();
        return view('Content.dashboard-kategori', $data);
    }

    public function create()
    {
        return view('Content.dashboard-tambah-kategori');
    }

    public function edit($id)
    {
        $data['kategori'] = kategori::find($id);
        return view('Content.dashboard-edit-kategori', $data);
    }

    public function update($id, Request $request)
    {
        $input = $request->all();
        kategori::find($id)->update($input);
        return redirect('dashboard-kategori');
    }

    public function delete($id, Request $request)
    {
        $user = kategori::find($id);
        $user->delete($request->all());
        return redirect('dashboard-kategori');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        kategori::create($input);
        return redirect('dashboard-kategori');
    }

    public function print ()
    {
        $data['kategori'] = kategori::all();

        $pdf = PDF::loadView('content.print-kategori', $data);
        return $pdf->stream();
    }
}
