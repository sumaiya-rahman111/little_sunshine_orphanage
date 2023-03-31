<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Frontend\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.sponsor.sponsorRegistrationForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.includes.sponsor.addSponsor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'nid' => ['required'],
            'company' => ['nullable'],
            'tlNumber' => ['nullable'],
            'bank' => ['required'],
            'branch' => ['nullable'],
            'area' => ['required'],
            'account' => ['required'],
            'phone' => ['required'],
            'address' => ['required']
        ]);

        Sponsor::create([
            'name' => $request->name,
            'email' => $request->email,
            'nid' => $request->nid,
            'company' => $request->company,
            'tlNumber' => $request->tlNumber,
            'bank' => $request->bank,
            'branch' => $request->branch,
            'area' => $request->area,
            'account' => $request->account,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->route('vregstatus');
    }


    public function backstore(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'nid' => ['required'],
            'company' => ['nullable'],
            'tlNumber' => ['nullable'],
            'bank' => ['required'],
            'branch' => ['nullable'],
            'area' => ['required'],
            'account' => ['required'],
            'phone' => ['required'],
            'address' => ['required']
        ]);

        Sponsor::create([
            'name' => $request->name,
            'email' => $request->email,
            'nid' => $request->nid,
            'company' => $request->company,
            'tlNumber' => $request->tlNumber,
            'bank' => $request->bank,
            'branch' => $request->branch,
            'area' => $request->area,
            'account' => $request->account,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return back();
    }


    public function sponsorRequest(){
        $datas = Sponsor::all();
        return view('backend.includes.sponsor.sponsorRequest',compact('datas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = Sponsor::find($id);
        return view('backend.includes.sponsor.sponsorDetails',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $datas = Sponsor::find($id);
        $datas->status = "y";

        $datas->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Sponsor::find($id);

        $datas->delete();

        return back();
    }
}
