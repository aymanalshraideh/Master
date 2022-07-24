<?php

namespace App\Http\Controllers;

use App\Models\Personal_Access_Token;
use App\Http\Requests\StorePersonal_Access_TokenRequest;
use App\Http\Requests\UpdatePersonal_Access_TokenRequest;

class PersonalAccessTokenController extends Controller
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
     * @param  \App\Http\Requests\StorePersonal_Access_TokenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonal_Access_TokenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal_Access_Token  $personal_Access_Token
     * @return \Illuminate\Http\Response
     */
    public function show(Personal_Access_Token $personal_Access_Token)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal_Access_Token  $personal_Access_Token
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal_Access_Token $personal_Access_Token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonal_Access_TokenRequest  $request
     * @param  \App\Models\Personal_Access_Token  $personal_Access_Token
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonal_Access_TokenRequest $request, Personal_Access_Token $personal_Access_Token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal_Access_Token  $personal_Access_Token
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal_Access_Token $personal_Access_Token)
    {
        //
    }
}
