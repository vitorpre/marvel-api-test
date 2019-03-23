<?php

namespace App\Http\Controllers;

use App\Models\Api\Marvel\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CharacterController extends Controller
{
    private $characterModel;

    public function __construct(Character $characterModel)
    {
        $this->characterModel = $characterModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = $this->characterModel->all();

        return view('characters.index', array('characters' => $characters->data->results));
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
     * @param  \App\Models\Api\Marvel\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = $this->characterModel->find($id);

        return view('characters.view', array('character' => $character));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\Marvel\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Api\Marvel\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\Marvel\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
