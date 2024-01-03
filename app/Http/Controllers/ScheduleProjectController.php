<?php

namespace App\Http\Controllers;

use App\Models\ScheduleProject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ScheduleProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = ScheduleProject::where('id_user', $userId)->take(4)->get();


        return view('project.projectHome', compact('user', 'data'));
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
        // $idUser = Auth::user();
        // $user = User::findOrFail($idUser);

        // random room_code
        $randomNumber = Str::random(10);

        // validasi data
        $request->validate([
            'id_user' => 'required',
            'judul'=> 'required',
            'deskripsi' => 'required',
            'room_code'
        ]);

        //Add new data
        $project = new ScheduleProject();
        $project->id_user = $request->input('id_user');
        $project->judul = $request->input('judul');
        $project->deskripsi = $request->input('deskripsi');
        $project->room_code = $randomNumber;
        $project->save();

        // Redirect
        return redirect()-> route('project');
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
