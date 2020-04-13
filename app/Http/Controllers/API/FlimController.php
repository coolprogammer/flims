<?php

namespace App\Http\Controllers\API;

use App\Flims;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'message' => 'films index called',
          ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flims  $flims
     * @return \Illuminate\Http\Response
     */
    public function show(Flims $flims)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flims  $flims
     * @return \Illuminate\Http\Response
     */
    public function edit(Flims $flims)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flims  $flims
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flims $flims)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flims  $flims
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flims $flims)
    {
        //
    }
}
