<?php

namespace App\Http\Controllers;

use App\Models\SchedulePersonal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchedulePersonalNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::all();


        return view('personal.personal', compact('user', 'data'),['data' => $data]);
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
        // dd($request);

        $request->validate([
            'id_user' => 'required',
            'judul' => 'max:50',
            'deskripsi' => 'string',
            'tanggal_deadline',
            'warna',
            // 'status'
        ]);

        // Create a new user
        $personal = new SchedulePersonal();
        $personal->id_user = $request->input('id_user');
        $personal->judul = $request->input('judul');
        $personal->deskripsi = $request->input('deskripsi');
        $personal->tanggal_deadline = $request->input('tanggal_deadline');
        $personal->warna = $request->input('warna');
        // $personal->status = $request->input('status');

        $personal->save();
        return redirect()->route('personal')->with('success', 'Profile updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchedulePersonal $schedulePersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchedulePersonal $schedulePersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchedulePersonal $schedulePersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchedulePersonal $schedulePersonal)
    {
        //
    }
}
