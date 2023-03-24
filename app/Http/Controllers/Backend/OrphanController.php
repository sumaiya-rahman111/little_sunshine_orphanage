<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Orphan;
use Image;
use File;

class OrphanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.orphan.addOrphan');
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
            'name' => ['required', 'string'],
            'fathers_name' => ['string','nullable'],
            'mothers_name' => ['string','nullable'],
            'birthdate' => ['string','nullable'],
            'birth_place' => ['string','nullable'],
            'birth_certificate' => ['string','nullable'],
            'birth_mark' => ['string','nullable'],
            'skin_color' => ['string','nullable'],
            'eye_color' => ['string','nullable'],
            'disabilities' => ['string','nullable'],
            'found_place' => ['string','nullable'],
            'religion' => ['string','nullable'],
            'picture' => ['required'],
            'gender' => ['required', 'string'],
        ]);

        // image part starts

        if($request->picture){
            $picture = $request->file('picture');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/orphans/".$scustomName);
            Image::make($picture)->save($location);


            Orphan::create([
                'name' => $request->name,
                'fathers_name' => $request->fathers_name,
                'mothers_name' => $request->mothers_name,
                'birthdate' => $request->birthdate,
                'birth_place' => $request->birth_place,
                'birth_certifiate' => $request->birth_certificate,
                'birth_mark' => $request->birth_mark,
                'skin_color' => $request->skin_color,
                'eye_color' => $request->eye_color,
                'disabilities' => $request->disabilities,
                'found_place' => $request->found_place,
                'religion' => $request->religion,
                'picture' => $scustomName,
                'gender' => $request->gender,
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datas = Orphan::all();
        return view('backend.includes.orphan.orphan_table',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Orphan::find($id);
        return view('backend.includes.orphan.editOrphan',compact('datas'));
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
        $update = Orphan::find($id);
        if($request->picture){
            $picture = $request->file('picture');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/orphans/".$scustomName);
            Image::make($picture)->save($location);
            $update->picture = $scustomName;
        }
        $update->name = $request->name;
        $update->fathers_name = $request->fathers_name;
        $update->mothers_name = $request->mothers_name;
        $update->birthdate = $request->birthdate;
        $update->birth_place = $request->birth_place;
        $update->birth_certificate = $request->birth_certificate;
        $update->birth_mark = $request->birth_mark;
        $update->skin_color = $request->skin_color;
        $update->eye_color = $request->eye_color;
        $update->disabilities = $request->disabilities;
        $update->found_place = $request->found_place;
        $update->religion = $request->religion;
        $update->gender = $request->gender;
        $update->update();
        return redirect()->Route('orphanList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Orphan::find($id);

        // dd($item);
        $item->delete();
        return back();
    }

    public function details($id){
        $datas = Orphan::find($id);
        return view('backend.includes.orphan.detailsOrphan',compact('datas'));
    }
}
