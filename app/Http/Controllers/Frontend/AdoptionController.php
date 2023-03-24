<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Orphan;
use App\Models\Frontend\AdoptionRequestSubmit;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
    public function adoptionRequestSubmit(Request $request,$id){
        $userId = Auth::user()->id;
        $request->validate([
            'adopterName' => ['required'],
            'adopterEmail' => ['required'],
            'adopterMobile' => ['required'],
            'adopterBan' => ['required'],
            'adopterNid' => ['required'],
            'adopterDob' => ['required'],
            'adopterPa' => ['required'],
            'adopterPeradd' => ['required'],
            'adopterReason' => ['required']
        ]);
        


        AdoptionRequestSubmit::create([
            'orphanId' => $id,
            'adopterId' => $userId, 
            'adopterName' => $request->adopterName,
            'adopterEmail' => $request->adopterEmail,
            'adopterMobile' => $request->adopterMobile,
            'adopterBan' => $request->adopterBan,
            'adopterNid' => $request->adopterNid,
            'adopterDob' => $request->adopterDob,
            'adopterPa' => $request->adopterPa,
            'adopterPeradd' => $request->adopterPeradd,
            'adopterReason' => $request->adopterReason
        ]);


        $arsData = AdoptionRequestSubmit::where('orphanId',$id)->get()->last();
        $orphanData = Orphan::find($id);

        // dd($arsData);

        return view('frontend.pages.adoption-status',compact('arsData','orphanData'));



    }

    public function insert(Request $request){
        $userId = Auth::user()->id;
        $request->validate([
            'adopterName' => ['required'],
            'adopterEmail' => ['required'],
            'adopterMobile' => ['required'],
            'adopterBan' => ['required'],
            'adopterNid' => ['required'],
            'adopterDob' => ['required'],
            'adopterPa' => ['required'],
            'adopterPeradd' => ['required'],
            'adopterReason' => ['required'],
            'orphanId' => ['required']
        ]);
        


        AdoptionRequestSubmit::create([
            'orphanId' => $request->orphanId,
            'adopterId' => $userId, 
            'adopterName' => $request->adopterName,
            'adopterEmail' => $request->adopterEmail,
            'adopterMobile' => $request->adopterMobile,
            'adopterBan' => $request->adopterBan,
            'adopterNid' => $request->adopterNid,
            'adopterDob' => $request->adopterDob,
            'adopterPa' => $request->adopterPa,
            'adopterPeradd' => $request->adopterPeradd,
            'adopterReason' => $request->adopterReason
        ]);
        

        return redirect()->route('manageMyRequests');
    }



    public function makeAdoption(){
        return view('backend.includes.manage.makeAdoption');
    }



    public function show(){
        $userId = Auth::user()->id;
        $orphanData = Orphan::all();

        $datas = AdoptionRequestSubmit::where('adopterId',$userId)->get();

        return view('frontend.pages.adoption.myAdoptionRequests',compact('datas','orphanData'));
    }


    public function adoptionRequest(){
        $datas = AdoptionRequestSubmit::all();
        return view('backend.includes.manage.adoptionRequest',compact('datas'));
    }



    public function showAdpt(){
        $datas = Orphan::all();
        $orphanid = AdoptionRequestSubmit::all();
        return view('frontend.pages.adoption-1',compact('datas','orphanid'));
    }

    public function details($id){
        $arsData = AdoptionRequestSubmit::where('orphanId',$id)->get()->last();
        $orphanData = Orphan::find($id);

        return view('frontend.pages.adoption-status',compact('arsData','orphanData'));
    }

}
