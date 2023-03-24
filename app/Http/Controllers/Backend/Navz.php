<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Backend\Orphan;
use App\Models\Backend\About;
use App\Models\Backend\Orphanage;
use App\Models\Backend\Staff;
use App\Models\Backend\SelectInvolve;
use App\Models\Backend\AboutSelection;
use App\Models\Frontend\Events;
use App\Models\Frontend\Involve;
use App\Models\Frontend\News;
use App\Models\Frontend\Facilities;
use App\Models\Frontend\AdoptionRequestSubmit;

class Navz extends Controller
{
    public function showAdmin(){
        $signupData = User::all()->last();
        $orphanData = Orphan::all()->last();
        $orphanageData = Orphanage::all()->last();

        $staffData = User::where('role',1)->orWhere('role',2)->orWhere('role',3)->orWhere('role',4)->orWhere('role',5)->orWhere('role',6)->get();

        return view('backend.pages.admin',compact('signupData','orphanData','orphanageData','staffData'));
        // dd($signupData);
    }


    public function frontendshow(){
        $aboutData = AboutSelection::all()->last();
        $eveData = Events::all();
        $facData = Facilities::all();
        $newsData = News::all();
        $data = SelectInvolve::all()->last();
        return view('frontend.pages.index',compact('data','newsData','facData','eveData', 'aboutData'));
    }



    // table menu section starts
    public function basicTableShow(){
        return view('backend.includes.table.basic_table');
    }

    // public function orphanList(){
    //     $datas = Orphan::all();
    //     return view('backend.includes.table.orphan_table',compact('datas'));
    // }

    public function orphanDetails($id){
        $osng = Orphan::find($id);
        $datas = AdoptionRequestSubmit::where('orphanId',$id)->get()->last();
        return view('frontend.pages.orphan-detail',compact('osng','datas'));
    }

    public function adoptSpecific($id){
        $specific = Orphan::find($id);
        return view('frontend.pages.adoption-2',compact('specific'));
    }

    public function staffList(){
        $signedUp = User::all();
        return view('backend.includes.table.staff_table',compact('signedUp'));
    }

    public function adoptedBabyList(){
        return view('backend.includes.table.adopted_table');
    }

    public function extAffair(){
        return view('backend.includes.table.ext_affair');
    }


    public function healthHistory(){
        return view('backend.includes.table.healthCheckup_table');
    }


    public function accounts(){
        return view('backend.includes.table.accounts_table');
    }


    public function feedback(){
        return view('backend.includes.table.feedback_table');
    }
    // table menu section ends

    // manage menu starts
    // public function addOrphan(){
    //     return view('backend.includes.manage.addOrphan');
    // }

    public function addStaff(){
        return view('backend.includes.manage.addStaff');
    }



    public function volunteerRequest(){
        return view('backend.includes.manage.volunteerRequest');
    }

    public function approvedRequest(){
        return view('backend.includes.manage.approvedRequest');
    }

    public function addDonor(){
        return view('backend.includes.manage.addDonor');
    }
    // manage menu section ends

}
