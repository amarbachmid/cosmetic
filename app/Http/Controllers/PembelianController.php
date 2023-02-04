<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembelian;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cos = pembelian::all();
        return view('cosmetik.pesanan.index', compact('cos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cos = new pembelian;
        return view('cosmetik.pesanan.create', compact('cos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cos = new pembelian;
        $cos->name = $request->name;
        $cos->pcs = $request->pcs;
        $cos->perpcs = $request->perpcs;
        $cos->types_id = $request->types_id;
        $cos->brands_id = $request->brands_id;
        $cos->save();

        return redirect('pembelian');
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
        $cos = pembelian::find($id);
        return view('cosmetik.pesanan.edit', compact('cos'));
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
        $cos = pembelian::find($id);
        $cos->name = $request->name;
        $cos->pcs = $request->pcs;
        $cos->perpcs = $request->perpcs;
        $cos->types_id = $request->types_id;
        $cos->brands_id = $request->brands_id;
        $cos->save();

        return redirect('pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cos = pembelian::find($id);
        $cos->delete();
        return redirect('pembelian');
    }
}
