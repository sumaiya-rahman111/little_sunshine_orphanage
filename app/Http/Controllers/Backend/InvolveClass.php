<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Involve;
use App\Models\Backend\SelectInvolve;

class InvolveClass extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.includes.main.involve.addInvolve');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datas = Involve::all();
        $selectedInvolve = SelectInvolve::all()->last();
        return view('backend.includes.main.involve.manageInvolve',compact('datas','selectedInvolve'));
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
            'desc' => ['required','string'],
            'button' => ['required','string'],
            'action' => ['required','string'],
        ]);

        // $act = "{{ Route('".$request->action."') }}";


        Involve::create([
            'heading' =>$request->heading,
            'desc' =>$request->desc,
            'button' =>$request->button,
            'action' =>$request->action
        ]);

        return back();
    }


    public function selectStore($id){
        $tunki = Involve::find($id);

        SelectInvolve::create([
            'iid' => $id,
            'heading' => $tunki->heading,
            'desc' => $tunki->desc,
            'button' => $tunki->button,
            'action' => $tunki->action
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Involve::find($id);

        return view('backend.includes.main.involve.editInvolve',compact('datas'));
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
        $updatable = Involve::find($id);

        $updatable->heading = $request->heading;
        $updatable->desc = $request->desc;
        $updatable->button = $request->button;
        $updatable->action = $request->action;
        $updatable->update();


        return redirect()->route('manageInvolve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Involve::find($id);
        $item->delete();
        return back();
    }



    public function partner(){
        return view('frontend.pages.partner');
    }

    public function volunteer(){
        return view('frontend.pages.volunteer.volunteer');
    }
 

    public function details($id){
        $datas = Involve::find($id);
        return view('backend.includes.main.involve.involveDetails',compact('datas'));

    }
}
