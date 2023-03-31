<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\VolunteerRegistration;
use Image;
use File;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.volunteer.addVolunteer');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'identype' => ['required'],
            'identity' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'op1' => ['string'],
            'op2' => ['string'],
            'op3' => ['string'],
            'op4' => ['string'],
            'op5' => ['string'],
            'image' => ['required']
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/volunteer/".$scustomName);
            Image::make($picture)->save($location);


            VolunteerRegistration::create([
                'name' => $request->name,
                'email' => $request->email,
                'identype' => $request->identype,
                'identity' => $request->identity,
                'phone' => $request->phone,
                'address' => $request->address,
                'op1' => $request->op1,
                'op2' => $request->op2,
                'op3' => $request->op3,
                'op4' => $request->op4,
                'op5' => $request->op5,
                'image' => $scustomName
            ]);

            return redirect()->route('vregstatus');
        }
    }






    public function backstore(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'identype' => ['required'],
            'identity' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'op1' => ['string'],
            'op2' => ['string'],
            'op3' => ['string'],
            'op4' => ['string'],
            'op5' => ['string'],
            'image' => ['required']
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/volunteer/".$scustomName);
            Image::make($picture)->save($location);


            VolunteerRegistration::create([
                'name' => $request->name,
                'email' => $request->email,
                'identype' => $request->identype,
                'identity' => $request->identity,
                'phone' => $request->phone,
                'address' => $request->address,
                'op1' => $request->op1,
                'op2' => $request->op2,
                'op3' => $request->op3,
                'op4' => $request->op4,
                'op5' => $request->op5,
                'image' => $scustomName
            ]);

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = VolunteerRegistration::find($id);
        return view('frontend.pages.volunteer.volunteerDetails',compact('datas'));
    }


    public function status(){
        return view('frontend.pages.volunteer.volunteerRegistrationStatus');
    }

    public function accept($id){
        $datas = VolunteerRegistration::find($id);
        $datas->status = "y";
        $datas->update();
        return back();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = VolunteerRegistration::find($id);
        $datas->delete();

        return back();
    }
}
