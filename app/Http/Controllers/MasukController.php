<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Masuk;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuks = Masuk::latest()->paginate(5);

        return view('masuks.index',compact('masuks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masuks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_dokumen' => 'required',
            'nama_dokumen' => 'required',
            'asal_dokumen' => 'required',
            'jenis' => 'required',
            'tanggal_dokumen' => 'required',
            'tanggal_masuk' => 'required',
            'proses' => 'required',
        ]);

        DB::table('masuks')->insert([
            'nomor_dokumen' => $request->nomor_dokumen,
            'nama_dokumen' => $request->nama_dokumen,
            'asal_dokumen' => $request->asal_dokumen,
            'jenis' => $request->jenis,
            'tanggal_dokumen' => $request->tanggal_dokumen,
            'tanggal_masuk' => $request->tanggal_masuk,
            'proses' => $request->proses,
        ]);
        
        return redirect('/masuks')->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Masuk $masuk)
    {
        return view('masuks.show',compact('masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        return view('masuks.edit',compact('masuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masuk $masuk)
    {
        $request->validate([
            'nomor_dokumen' => 'required',
            'nama_dokumen' => 'required',
            'asal_dokumen' => 'required',
            'jenis' => 'required',
            'tanggal_dokumen' => 'required',
            'tanggal_masuk' => 'required',
            'proses' => 'required',
        ]);

        $masuk->update($request->all());

        return redirect()->route('masuks.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk)
    {
        $masuk->delete();

        return redirect()->route('masuks.index')
                        ->with('success','Deleted successfully');
    }
}
