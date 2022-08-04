<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;
use App\Http\Requests\KasRequest;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexkas()
    {
        $data = Kas::paginate(5);
        return view('users/kas/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkas()
    {
        return view('users/kas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekas(KasRequest $request)
    {
        $data = Kas::create($request->all());
        $data->save();

        return redirect()->route('kas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkas($id)
    {
        $data = Kas::findOrFail($id);
        return view('users/kas/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatekas(KasRequest $request, $id)
    {
        $kas = Kas::findOrFail($id);
        $data = $request->except(['_token']);
        $kas->update($data);

        return redirect()->route('kas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroykas($id)
    {
        $data = Kas::find($id);
        $data->delete();

        return redirect()->route('kas.index');
    }
}