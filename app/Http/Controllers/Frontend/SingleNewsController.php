<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Frontend\News;
use Illuminate\Support\Facades\Auth;
use App\Models\Frontend\NewsFeedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function singleNews($id){
        $newsfdbk = NewsFeedback::all();
        $data = News::find($id);
        return view('frontend.pages.news',compact('data','newsfdbk'));
    }

    public function newsFeedback(Request $request,$id){
        $fid = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        NewsFeedback::create([
            'newsId' => $id,
            'fid' => $fid,
            'name' => $name,
            'email' => $email,
            'comment' => $request->ncomment
        ]);

        return back();
    }

    public function newsFeedbackdlt($id){
        $dat = NewsFeedback::find($id);
        $dat->delete();
        return back();
    }
}
