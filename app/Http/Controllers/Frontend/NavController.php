<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Orphanage;
use App\Models\Backend\Orphan;
use App\Models\Frontend\Events;
use App\Models\Frontend\Facilities;
use App\Models\Frontend\Involve;
use App\Models\Frontend\News;
use App\Models\Backend\AboutSelection;

class NavController extends Controller
{
    public function orphanageShow(){
        $datas = Orphanage::all();
        return view('frontend.pages.orphanage',compact('datas'));
    }

    public function showAbout(){
        $about = AboutSelection::all()->last();
        return view('frontend.pages.about',compact('about'));
    }

    public function showFac(){
        $datas = Facilities::all();
        return view('frontend.pages.facility',compact('datas'));
    }


    public function showEve(){
        $datas = Events::all();
        return view('frontend.pages.event',compact('datas'));
    }


    public function showIsts(){
        $datas = News::all();
        return view('frontend.pages.update',compact('datas'));
    }




    public function showCntrbt(){
        return view('frontend.pages.donate');
    }


    public function showAch(){
        return view('frontend.pages.achievement');
    }


    public function volunt(){
        return view('frontend.pages.volunteer');
    }


    public function showOrphan(){
        $datas = Orphan::all();
        return view('frontend.pages.orphan-list',compact('datas'));
    }
}
