<?php

namespace App\Http\Controllers;

use App\Models\participant;
use App\Http\Requests\StoreparticipantRequest;
use App\Http\Requests\UpdateparticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $participants = Participant::with('user')->latest()->get();
        return view('participant.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreparticipantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreparticipantRequest $request)
    {
        participant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'numero' => $request->numero,
            'email' => $request->email
        ]);

        return redirect()->route('dashboard')->with('success', 'Participant a été Ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(participant $participant)
    {
       // return 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParticipantRequest $request, participant $participant)
    {  
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(participant $participant)
    {
        //
    }
}
