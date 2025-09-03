<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return Teachers::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teachers $teachers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teachers $teachers)
    {
        //
    }
}
