<?php

namespace App\Http\Controllers;

use App\Models\ParticipantPicture;
use Illuminate\Http\Request;

class ParticipantPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participant_pictures = ParticipantPicture::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $participant_pictures
        ];
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
        $participant_picture = ParticipantPicture::create($request->all());
        return [
            "status" => 1,
            "data" => $participant,
            "msg" => "Participant picture added successfully"
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantPicture  $participantPicture
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantPicture $participantPicture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantPicture  $participantPicture
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantPicture $participantPicture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParticipantPicture  $participantPicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipantPicture $participantPicture)
    {
        $participantPicture::update($request->all());
        return [
            "status" => 1,
            "data" => $participantPicture,
            "msg" => "Participant picture updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantPicture  $participantPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantPicture $participantPicture)
    {
        $participantPicture::delete();
        return [
            "status" => 1,
            "data" => $participantPicture,
            "msg" => "Participant picture deleted successfully"
        ];
    }
}
