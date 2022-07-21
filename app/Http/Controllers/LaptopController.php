<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Http\Requests\LaptopRequest;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlaptop()
    {
        $data = Laptop::paginate(5);
        return view('users/laptop/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createlaptop()
    {
        return view('users/laptop/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelaptop(LaptopRequest $request)
    {
        $data = Laptop::create($request->all());
        $data->save();

        return redirect()->route('laptop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showlaptop($id)
    {
        $data = Laptop::findOrFail($id);
        return view('users/laptop/show', compact('data'));
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
    public function updatelaptop(LaptopRequest $request, $id)
    {
        $laptop = Laptop::findOrFail($id);
        $data = $request->except(['_token']);
        $laptop->update($data);

        return redirect()->route('laptop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroylaptop($id)
    {
        $data = Laptop::findOrFail($id);
        $data->delete();

        return redirect()->route('laptop.index');
    }
}