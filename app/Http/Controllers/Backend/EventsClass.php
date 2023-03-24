<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Events;
use Image;
use File;

class EventsClass extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.main.events.addEvents');
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
            'event_date' => ['required'],
            'heading' => ['required'],
            'from_time' => ['required'],
            'to_time' => ['required'],
            'location' => ['required'],
            'short_description' => ['required'],
            'full_description' => ['required'],
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/events/".$scustomName);
            Image::make($picture)->save($location);


            Events::create([
                'image' => $scustomName,
                'event_date' => $request->event_date,
                'heading' => $request->heading,
                'from_time' => $request->from_time,
                'to_time' => $request->to_time,
                'location' => $request->location,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description
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
        $datas = Events::all();
        return view('backend.includes.main.events.manageEvents',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Events::find($id);

        return view('backend.includes.main.events.editEvents',compact('datas'));
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
        $update = Events::find($id);
        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/events/".$scustomName);
            Image::make($picture)->save($location);
            $update->image = $scustomName;
        }
        $update->event_date = $request->event_date;
        $update->heading = $request->heading;
        $update->from_time = $request->from_time;
        $update->to_time = $request->to_time;
        $update->location = $request->location;
        $update->short_description = $request->short_description;
        $update->full_description = $request->full_description;
        $update->update();
        return redirect()->Route('manageEvents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Events::find($id);

        $data->delete();

        return back();
    }


    public function details($id){
        $datas = Events::find($id);

        return view('backend.includes.main.events.detailsEvents',compact('datas'));
    }
}
