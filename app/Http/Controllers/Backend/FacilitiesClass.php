<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Facilities;
use Image;
use File;

class FacilitiesClass extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.main.facilities.addFacilities');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'desc' => ['required']
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/facilities/".$scustomName);
            Image::make($picture)->save($location);


            Facilities::create([
                'image' => $scustomName,
                'heading' => $request->heading,
                'desc' => $request->desc
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
        $datas = Facilities::all();
        return view('backend.includes.main.facilities.manageFacilities',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Facilities::find($id);

        return view('backend.includes.main.facilities.editFacilities',compact('datas'));
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
        $upd = Facilities::find($id);

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/facilities/".$scustomName);
            Image::make($picture)->save($location);
            $upd->image = $scustomName;
        }
        $upd->heading = $request->heading;
        $upd->desc = $request->desc;
        $upd->update();
        return redirect()->Route('manageFacilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Facilities::find($id);
        $data->delete();
        return back();
    }


    public function details($id){
        $datas = Facilities::find($id);

        return view('backend.includes.main.facilities.detailsFacility',compact('datas'));
    }
}
