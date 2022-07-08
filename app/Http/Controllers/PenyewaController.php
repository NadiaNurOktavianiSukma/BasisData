<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;
use App\Models\Gallery;
class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPenyewa = Penyewa::with('model')->paginate(100);
        return view('Penyewa.data-penyewa', compact('dtPenyewa'));
    }


    public function data_penyewa(){
        return view('Penyewa.data-penyewa');
    }

    public function create_penyewa(){
        return view('Penyewa.create-penyewa');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mod = Gallery::all();
        return view('Penyewa.create-penyewa', compact('mod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Penyewa::create([
            'nama' => $request->nama,
            'model_id' => $request->model_id,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'lama' => $request->lama,
        ]);

        return redirect('data-penyewa')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pen = Penyewa::findorfail($id);
        return view('Penyewa.edit-penyewa', compact('pen'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pen = Penyewa::findorfail($id);
        $pen->update($request->all());
        return redirect('data-penyewa')->with('toast_succes', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pen = Penyewa::findorfail($id);
        $pen->delete();
        return back();
    }
}