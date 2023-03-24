<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;
use App\Models\Backend\AboutSelection;
use Image;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.main.about.addAbout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selects()
    {
        $aboutData = About::all();

        return view('backend.includes.main.about.selectAbout',compact('aboutData'));
    }
    public function selectStore($id)
    {
        $tunki = About::find($id);

        AboutSelection::create([
            'aids' => $id,
            'image' => $tunki->image,
            'heading' => $tunki->heading,
            'desc' => $tunki->desc,
            'p1' => $tunki->p1,
            'p2' => $tunki->p2,
            'p3' => $tunki->p3,
            'p4' => $tunki->p4,
            'aboutPhoneNumber' => $tunki->aboutPhoneNumber,
            'aboutEmailAddress' => $tunki->aboutEmailAddress,
            'aboutLocation' => $tunki->aboutLocation
        ]);

        return back();
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
            'image' => ['required'],
            'heading' => ['required'],
            'desc' => ['required'],
            'p1' => ['required'],
            'p2' => ['required'],
            'p3' => ['required'],
            'p4' => ['required'],
            'aboutPhoneNumber' => ['required'],
            'aboutEmailAddress' => ['required'],
            'aboutLocation' => ['required']
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/about/".$scustomName);
            Image::make($picture)->save($location);


            About::create([
                'image' => $scustomName,
                'heading' => $request->heading,
                'desc' => $request->desc,
                'p1' => $request->p1,
                'p2' => $request->p2,
                'p3' => $request->p3,
                'p4' => $request->p4,
                'aboutPhoneNumber' => $request->aboutPhoneNumber,
                'aboutEmailAddress' => $request->aboutEmailAddress,
                'aboutLocation' => $request->aboutLocation
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
    public function show()
    {
        $datas = About::all();
        $selectedData = AboutSelection::all()->last();

        return view('backend.includes.main.about.manageAbout', compact('datas','selectedData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = About::find($id);

        return view('backend.includes.main.about.editAbout', compact('datas'));
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

        // ===============


        $update = About::find($id);
        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/about/".$scustomName);
            Image::make($picture)->save($location);
            $update->image = $scustomName;
        }
        $update->heading = $request->heading;
        $update->desc = $request->desc;
        $update->p1 = $request->p1;
        $update->p2 = $request->p2;
        $update->p3 = $request->p3;
        $update->p4 = $request->p4;
        $update->aboutPhoneNumber = $request->aboutPhoneNumber;
        $update->aboutEmailAddress = $request->aboutEmailAddress;
        $update->aboutLocation = $request->aboutLocation;
        $update->update();
        return redirect()->Route('manageAboutOption');
        



        // ==============


        // $previousAbout = About::find($id);
        // $previousAbout->image = $request->image;
        // $previousAbout->heading = $request->heading;
        // $previousAbout->desc = $request->desc;
        // $previousAbout->p1 = $request->p1;
        // $previousAbout->p2 = $request->p2;
        // $previousAbout->p3 = $request->p3;
        // $previousAbout->p4 = $request->p4;
        // $previousAbout->aboutPhoneNumber = $request->aboutPhoneNumber;
        // $previousAbout->aboutEmailAddress = $request->aboutEmailAddress;
        // $previousAbout->aboutLocation = $request->aboutLocation;
        // $previousAbout->update();
        // return redirect()->route('manageAbout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = About::find($id);

        $data->delete();

        return back();
    }

    public function moreDetails($id){
        $datas = About::find($id);

        return view('backend.includes.main.about.aboutDetails',compact('datas'));
    }
}
