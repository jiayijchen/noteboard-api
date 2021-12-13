<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserNoteRequest;
use App\Http\Requests\UpdateUserNoteRequest;
use App\Models\UserNote;

class UserNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreUserNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserNoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserNote  $userNote
     * @return \Illuminate\Http\Response
     */
    public function show(UserNote $userNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserNote  $userNote
     * @return \Illuminate\Http\Response
     */
    public function edit(UserNote $userNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserNoteRequest  $request
     * @param  \App\Models\UserNote  $userNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserNoteRequest $request, UserNote $userNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserNote  $userNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserNote $userNote)
    {
        //
    }
}
