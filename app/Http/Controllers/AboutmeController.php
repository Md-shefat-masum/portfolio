<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutme;
use Carbon\Carbon;
use Session;
use Auth;
use Image;

class AboutmeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // home page of about me control panel

    public function index(){
        // $all=aboutme::where('aboutme_status',1)->orderBy('aboutme_id','DESC')->firstOrFail();
        $all=aboutme::firstOrFail();
        return view('admin.aboutme.all',compact('all'));
    }

    // heading changing controller
    public function aboutme_heading_update(Request $request){
        $aboutme_heading_update=aboutme::where('aboutme_id',1)->update([
            'aboutme_heading'=>$_POST['aboutme_heading'],
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($aboutme_heading_update){
            return redirect('/admin/aboutme');
        }
    }

    // about me details changing controller
    public function aboutme_details_update(){
        $aboutme_details_update=aboutme::where('aboutme_id',1)->update([
            'aboutme_details'=>$_POST['aboutme_details'],
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($aboutme_details_update){
            return redirect('/admin/aboutme');
        }
    }

    // about me link changing controller
    public function aboutme_link_update(){
        $aboutme_link_update=aboutme::where('aboutme_id',1)->update([
            'aboutme_link'=>$_POST['aboutme_link'],
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($aboutme_link_update){
            return redirect('/admin/aboutme');
        }
    }

    public function aboutme_image_update(Request $request){
        $aboutme_image_update=aboutme::where('aboutme_id',1)->update([
            'aboutme_photo'=>'',
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('aboutme_photo')){
            $image=$request->file('aboutme_photo');
            $ImageName="aboutme_".$aboutme_image_update.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,1110)->save('uploads/aboutme/'.$ImageName);

            aboutme::where('aboutme_id',$aboutme_image_update)->update([
                'aboutme_photo'=>$ImageName
            ]);
        }

        if($aboutme_image_update){
            return redirect('/admin/aboutme');
        }
    }


    // public function add(){
    //     return view('admin.aboutme.add_about_me_info');
    // }
    // public function update(Request $request){
    //     $slug='MA'.uniqid(20);
    //     $insert=aboutme::update([
    //         'aboutme_heading'=>$_POST['aboutme_heading'],
    //         'aboutme_details'=>$_POST['aboutme_details'],
    //         'aboutme_link'=>$_POST['aboutme_link'],
    //         'aboutme_slug'=>$slug
    //     ]);
    //     if($insert){
    //         return redirect('/admin/aboutme');
    //     }
    // }

}
