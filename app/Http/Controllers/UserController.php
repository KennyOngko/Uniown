<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Hospital;
use App\News;
use App\Support;
use App\Schedule;
use App\History;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $hospital = Hospital::all()->random(3);
        return view('utama',['Hospital'=>$hospital]);
    }

    public function news(){

        return view('news');
    }

    public function aboutus(){

        return view('about_us');
    }

    public function indonews(){
        $news = News::where('country', '=', 'Indonesia')->paginate(3);
        return view('indo_news', ['News'=>$news]);
    }
    public function singnews(){
        $news = News::where('country', '=', 'Singapore')->paginate(3);
        return view('sing_news', ['News'=>$news]);
    }

    public function malaynews(){
        $news = News::where('country', '=', 'Malaysia')->paginate(3);
        return view('malay_news', ['News'=>$news]);
    }
    public function thainews(){
        $news = News::where('country', '=', 'Thailand')->paginate(3);
        return view('thai_news', ['News'=>$news]);
    }

    public function detailnews($id){
        $news = News::find($id);
        return view('detail_news', ['News'=>$news]);
    }

    public function searchdata(Request $req){
        $key = $req->search;
        $findkey = DB::table('hospitals')->where('name', 'like', '%'.$key.'%')->paginate(5); 
        return view('hospital_list', ['Hospital'=> $findkey]);
    }

    public function hospitallist(){
        $var = Hospital::paginate(5);

        return view('hospital_list',['Hospital'=>$var]);
    }

    public function detailhospital($id){
        $var = Hospital::find($id);
        return view('detailhospital', ['Hospital'=>$var]);
    }

    public function submitschedule(Request $request, $id) {
        $user = Auth::user();
        
        $request->validate([
            'people' => ['required', 'numeric', 'min:1'],
        ]);

        $schedule = Schedule::create([
            'user_id' => $user->id,
            'hospital_id' => $id,
            'people' => $request->people,
            'date' => $request->date,
        ]);

        $schedule->save();

        History::create([
            'user_id' => $user->id,
            'schedule_id' => $schedule->id,
            'result' => 'No Result yet.',
        ]);

        return redirect()->route('hospitalList');
    }

    public function support(){
        
        return view('support');
    }


    public function searchsupport(Request $req){
        $key = $req->searchsupport;
        $findkey = DB::table('supports')->where('question', 'like', $key)->paginate(1); 
        return view('support_answer', ['Support'=> $findkey]);
    }

    public function listsupport(){
        $support = Support::paginate(1);
        return view('support_answer', ['Support'=> $support]);
    }

    public function schedule(){
        $schedule = Schedule::where('user_id', Auth::user()->id)->get();
        $history = History::where('user_id', Auth::user()->id)->get();
        return view('schedule',['Schedule'=>$schedule],['History'=>$history]);
    }

}