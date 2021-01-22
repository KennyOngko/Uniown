<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Schedule;
use App\History;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }

    public function addtest() {
        $schedule = Schedule::all();
        return view('addtest',['schedule' => $schedule]);
    }

    public function storetest(Request $request) {
        $request->validate([
            'schedule_id' => ['required'],
            'result' => ['required'],
        ]);

        History::where('schedule_id', $request->schedule_id)->update([
            'schedule_id' => $request->schedule_id,
            'name' => $request->result,
        ]);

        return redirect()->route('admin')->with(['success' => 'Hasil Tes sudah diupdate!']);
    }
}
