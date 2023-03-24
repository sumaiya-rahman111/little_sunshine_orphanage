<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Orphanage;
use Image;
use File;

class OrphanageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.orphanage.addOrphanage');
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
            'name' => ['required'],
            'short_desc' => ['required'],
            'desc' => ['required'],
            'location' => ['required'],
            'email' => ['required'],
            'photo' => ['required'],
        ]);


        if($request->photo){
            $picture = $request->file('photo');
            $orphanageName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/orphanages/".$orphanageName);
            Image::make($picture)->save($location);

            Orphanage::create([
                'name' => $request->name,
                'short_desc' =>$request->short_desc,
                'desc' =>$request->desc,
                'location'=>$request->location,
                'email' =>$request->email,
                'photo' => $orphanageName
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
        $datas = Orphanage::all();
        return view('backend.includes.orphanage.manageOrphanage',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Orphanage::find($id);

        return view('backend.includes.orphanage.editOrphanage',compact('datas'));
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
        $update = Orphanage::find($id);
        if($request->photo){
            $picture = $request->file('photo');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/orphanages/".$scustomName);
            Image::make($picture)->save($location);
            $update->photo = $scustomName;
        }
        $update->name = $request->name;
        $update->short_desc = $request->short_desc;
        $update->desc = $request->desc;
        $update->location = $request->location;
        $update->email = $request->email;
        $update->update();
        return redirect()->Route('manageOrphanage');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Orphanage::find($id);
        $data->delete();

        return back();
    }

    public function details($id){
        $datas = Orphanage::find($id);

        return view('backend.includes.orphanage.detailsOrphanage',compact('datas'));
    }
}
