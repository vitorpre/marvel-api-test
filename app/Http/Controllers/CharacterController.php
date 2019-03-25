<?php

namespace App\Http\Controllers;

use App\Http\Requests\Characters\ListCharacterRequest;
use App\Models\Api\Marvel\Character;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
    public function index(ListCharacterRequest $request)
    {
        $page = $request->get('page', 1);

        $parametersSearch = array(
            'limit' => $request->get('limit', 20),
            'offset' => $request->get('limit', 20) * ($page - 1),
            'nameStartsWith' => $request->get('nameStartsWith')
        );


        $characters = $this->characterModel->all($parametersSearch);

        $charactersPaginator = new LengthAwarePaginator($characters->data->results,
            $characters->data->total,
            $characters->data->limit,
            $page,
            array('path' => url('/characters'),
                'query' => ['limit' => $characters->data->limit, 'nameStartsWith' => $request->get('nameStartsWith')])  );

        return view('characters.index', array('characters' => $charactersPaginator));
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
