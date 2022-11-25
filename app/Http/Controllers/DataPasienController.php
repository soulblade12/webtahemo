<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use App\Http\Requests\StoreDataPasienRequest;
use App\Http\Requests\UpdateDataPasienRequest;

class DataPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function show(DataPasien $dataPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPasien $dataPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPasienRequest  $request
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataPasienRequest $request, DataPasien $dataPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPasien $dataPasien)
    {
        //
    }
}
