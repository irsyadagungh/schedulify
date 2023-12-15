<?php

namespace App\Http\Controllers;

use App\Models\ScheduleProject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = Auth::user();
        $user = User::findOrFail($idUser);
        $project = ScheduleProject::where('id_user', $user->id)->get();

        return view('project.projectHome', compact('project','users'));
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
        // Auth User
        $idUser = Auth::user();
        $user = User::findOrFail($idUser);

        // random room_code
        $randomNumber = rand(1, 9999);

        // validasi data
        $request->validate([
            'id_user' => $user,
            'judul'=> 'required',
            'deskripsi' => 'required',
            'room_code' => $randomNumber
        ]);

        //Add new data
        $project = new ScheduleProject();
        $project->id_user = $request->$user;
        $project->judul = $request->input('judul');
        $project->deskripsi = $request->input('deskripsi');
        $project->room_code = $request->$randomNumber;
        $project->save();

        // Redirect
        return redirect()-> view('project.projectHome');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduleProject $scheduleProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScheduleProject $scheduleProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScheduleProject $scheduleProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduleProject $scheduleProject)
    {
        //
    }
}
