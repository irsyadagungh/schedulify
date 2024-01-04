<?php

namespace App\Http\Controllers;

use App\Models\ScheduleProject;
use App\Models\ScheduleProjectMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


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
        $userId = Auth::id();
        $data = ScheduleProject::where('id_user', $userId)
            ->orWhereHas('member', function ($query) use ($userId) {
                $query->where('id_user', $userId);
            })
            ->take(4)
            ->get();


        return view('project.projectHome', compact('user', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function join(Request $request, ScheduleProject $scheduleProject){
        // Auth User
        // dd($request);
        $idUser = Auth::id();
        $user = User::findOrFail($idUser);
        // dd($user);

        $request->validate([
            'room_code' => 'required'
        ]);

        $room = ScheduleProject::where('room_code', $request->input('room_code'))->first();
        // $idProject = ScheduleProject::with('member')->find($user === $scheduleProject->id);
        // dd($room);

        if (!$room) {
            // Handle the case when the room is not found
            return redirect()->route('project')->with('error', 'Room not found');
        }

        // check member logic
        $userIsMember = ScheduleProjectMember::where('id_schedule_project', $room->id)
        ->where('id_user', $idUser)
        ->where('status', "member")
        ->exists();

        // check host logic
        $userIsHost = ScheduleProjectMember::where('id_schedule_project', $room->id)
        ->where('id_user', $idUser)
        ->where('status', "host")
        ->exists();

        // Check if the user is already a member
        if ($userIsMember) {
            // Handle the case when the user is already a member
            return redirect()->route('project')->with('error', 'You are already a member of this '.$room->judul.' project');
        }

        if ($userIsHost) {
            // Handle the case when the user is already a member
            return redirect()->route('project')->with('error', 'You are already a host of this '.$room->judul.' project');
        }

        $addMember = new ScheduleProjectMember();
        $addMember->id_schedule_project = $room -> id ;
        $addMember->id_user = $user -> id;
        $addMember->status = "member";
        $addMember->save();
        // dd($addMember);

        return redirect()->route('project');
    }

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

        // Create a new ScheduleProjectMember
        $member = new ScheduleProjectMember();
        $member->id_schedule_project = $project->id; // Use the project ID
        $member->id_user = $request->input('id_user');
        $member->status = "host";

        // Save the member
        $member->save();


        // Redirect
        return redirect()-> route('project');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = ScheduleProject::findOrFail($id);

        $member = $data->member()->with('user')->get();

        return view('project.detailProject', compact('user', 'data','member'));
    }

    public function storeTask(Request $request)
    {
        // Generate a random room_code
        $randomNumber = Str::random(10);

        // Validate data
        $request->validate([
            'id_user' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        // Create a new ScheduleProject
        $project = new ScheduleProject();
        $project->id_user = $request->input('id_user');
        $project->judul = $request->input('judul');
        $project->deskripsi = $request->input('deskripsi');
        $project->room_code = $randomNumber;

        // Save the project
        $project->save();

        // Redirect
        return redirect()->route('project');
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
