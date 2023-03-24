<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Orphan;
use App\Models\Backend\Orphanage;
use App\Models\Backend\Staff;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class Manage extends Controller
{
    // public function insertOrphan(Request $request){
    //     $request->validate([
    //         'name' => ['required', 'string'],
    //         'fathers_name' => ['string','nullable'],
    //         'mothers_name' => ['string','nullable'],
    //         'birthdate' => ['string','nullable'],
    //         'birth_place' => ['string','nullable'],
    //         'birth_certificate' => ['string','nullable'],
    //         'birth_mark' => ['string','nullable'],
    //         'skin_color' => ['string','nullable'],
    //         'eye_color' => ['string','nullable'],
    //         'disabilities' => ['string','nullable'],
    //         'found_place' => ['string','nullable'],
    //         'religion' => ['string','nullable'],
    //         'picture' => ['required'],
    //         'gender' => ['required', 'string'],
    //     ]);

    //     // image part starts

    //     if($request->picture){
    //         $picture = $request->file('picture');
    //         $scustomName = rand().".".$picture->getClientOriginalExtension();
    //         $location = public_path("backend/imageStore/orphans/".$scustomName);
    //         Image::make($picture)->save($location);


    //         Orphan::create([
    //             'name' => $request->name,
    //             'fathers_name' => $request->fathers_name,
    //             'mothers_name' => $request->mothers_name,
    //             'birthdate' => $request->birthdate,
    //             'birth_place' => $request->birth_place,
    //             'birth_certifiate' => $request->birth_certificate,
    //             'birth_mark' => $request->birth_mark,
    //             'skin_color' => $request->skin_color,
    //             'eye_color' => $request->eye_color,
    //             'disabilities' => $request->disabilities,
    //             'found_place' => $request->found_place,
    //             'religion' => $request->religion,
    //             'picture' => $scustomName,
    //             'gender' => $request->gender,
    //         ]);
    //     }

    //     return back();
    // }



    // public function deleteOrphan($id){
    //     $item = Orphan::find($id);

    //     // dd($item);
    //     $item->delete();
    //     return back();
    // }




    public function addStaff(Request $request){

        $request->validate([
            'staff_name' => ['nullable'],
            'post' => ['nullable'],
            'email' => ['nullable'],
            'birthDate' => ['nullable'],
            'birth_Mark' => ['nullable'],
            'perm_address' => ['nullable'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'alt_contact' => ['nullable'],
            'service_status' => ['nullable'],
            'joining_date' => ['nullable'],
            'NID' => ['nullable'],
            'passport' => ['nullable'],
            'resume' => ['nullable'],
            'photo' => ['nullable'],
            'gender' => ['nullable'],
        ]);
    
        if($request->photo){
            $picture = $request->file('photo');
            $pcustomname = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/staff/photo/".$pcustomname);
            Image::make($picture)->save($location);

            // if($request->resume){
            //     $file = $request->file('resume');
            //     $pdfName = rand().".".$file->getClientOriginalExtension();
            //     $path = Storage::putFileAs('photos', new File('photos'), $pdfName);
            //     // $path = Storage::putFileAs('photos', new File('/path/to/photo'), 'photo.jpg');

            // }


            Staff::create([
                'staff_name'=>$request->staff_name,
                'post' =>$request->post,
                'email' => $request->email,
                'birthDate' => $request->birthDate,
                'birth_Mark' => $request->birth_Mark,
                'perm_address' => $request->perm_address,
                'address' => $request->address,
                'contact' => $request->contact,
                'alt_contact' => $request->alt_contact,
                'service_status' => $request->service_status,
                'joining_date' => $request->joining_date,
                'NID' => $request->NID,
                'passport' => $request->passport,
                'resume' => $request->resume,
                'photo' =>$pcustomname,
                'gender' => $request->gender
            ]);

            return back();
        }
    }


    public function orphanageDetails($id){
        $od = Orphanage::find($id);
        return view('frontend.pages.orphanage-detail',compact('od'));
    }

}
