<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\News;
use Image;
use File;


class NewsClass extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.main.news.addNews');
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
            'heading' => ['required', 'string'],
            'date' => ['required', 'string'],
            'location' => ['required', 'string'],
            'short_description' => ['required','string'],
            'full_description' => ['required','string'],
            'photo' => ['required']
        ]);


        if($request->photo){
            $picture = $request->file('photo');
            $newsCustomName = rand().".".$picture->getClientOriginalExtension();
            // $location = public_path("backend/imageStore/frontend/news/".$newsCustomName);
            $location = public_path("frontend/images/news/".$newsCustomName);
            Image::make($picture)->save($location);

            News::create([
                'heading' =>$request->heading,
                'date' =>$request->date,
                'location' =>$request->location,
                'short_description' =>$request->short_description,
                'full_description' =>$request->full_description,
                'photo' => $newsCustomName
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
        $datas = News::all();
        return view('backend.includes.main.news.manageNews',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = News::find($id);

        return view('backend.includes.main.news.editNews',compact('datas'));
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
        $update = News::find($id);
        if($request->photo){
            $picture = $request->file('photo');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("frontend/images/news/".$scustomName);
            Image::make($picture)->save($location);
            $update->photo = $scustomName;
        }
        $update->heading = $request->heading;
        $update->date = $request->date;
        $update->location = $request->location;
        $update->short_description = $request->short_description;
        $update->full_description = $request->full_description;
        $update->update();
        return redirect()->Route('manageNews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);

        $data->delete();

        return back();
    }

    public function details($id){
        $datas = News::find($id);

        return view('backend.includes.main.news.detailsNews',compact('datas'));
    }
}
