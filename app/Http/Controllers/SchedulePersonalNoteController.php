<?php

namespace App\Http\Controllers;

use App\Models\SchedulePersonal;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchedulePersonalNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // date
        $currentDate = Carbon::now();
        $formatDate = $currentDate->format('Y-m-d');
        // dd($formatDate);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $dataToday = SchedulePersonal::where('id_user', $userId)->where('tanggal_deadline', $formatDate)->take(4)->get();
        // prioritas data by bayu
        $data_prioritas = SchedulePersonal::where('id_user', $userId)->where('status', 'prioritas')->take(4)->get();
        $dataComingSoon = SchedulePersonal::where('id_user', $userId)->where('tanggal_deadline','!=' ,$formatDate)->where('status',  null)->take(4)->get();

        return view('personal.personal', compact('user', 'dataToday','dataComingSoon', 'data_prioritas','formatDate'));
    }

    public function todayShowAll()
    {

        $currentDate = Carbon::now();
        $formatDate = $currentDate->format('Y-m-d');
        // dd($formatDate);
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::where('id_user', $userId)
                ->where('tanggal_deadline', $formatDate)
                ->get();


        return view('personal.todaylihatsemua', compact('user', 'data'));
    }
    public function prioritasShowAll()
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::where('id_user', $userId)
                ->where('status', 'prioritas')
                ->get();


        return view('personal.prioritaslihatsemua', compact('user', 'data'));
    }

    public function comingSoonShowAll()
    {
        // date
        $currentDate = Carbon::now();
        $formatDate = $currentDate->format('Y-m-d');
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::where('id_user', $userId)
                ->where('tanggal_deadline','!=',$formatDate)
                ->where('status', null)
                ->get();


        return view('personal.comingsoonlihatsemua', compact('user', 'data'));
    }


    public function home()
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::where('id_user', $userId)->take(4)->get();


        return view('home', compact('user', 'data'),['data' => $data]);
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
    public function edit($id)
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = SchedulePersonal::findOrFail($id);


        return view('personal.updateNote', compact('user', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchedulePersonal $schedulePersonal, $id)
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
        $personal = SchedulePersonal::findOrFail($id);
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        SchedulePersonal::where('id',$id)->delete();
        return redirect('/personal')->with('sukses','Data Berhasil Di Hapus');
    }
    // status prioritas by bayu
    public function change(Request $request, $id)
    {
        if($request->status == 'prioritas'){
            $value = null;
        }else{
            $value = "prioritas";
        }

        $request->validate([
            'status',
        ]);

        $personal = SchedulePersonal::findOrFail($id);
        $personal->status = $value;
        $personal->save();
        return redirect()->route('personal');
    }

    public function done(Request $request, $id)
    {
        if($request->status == 'done'){
            $value = null;
        }else{
            $value = "done";
        }

        $request->validate([
            'status',
        ]);

        $personal = SchedulePersonal::findOrFail($id);
        $personal->status = $value;
        $personal->save();
        return redirect()->route('personal');
    }
}
