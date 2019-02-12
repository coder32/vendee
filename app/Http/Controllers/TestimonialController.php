<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{
    //
    public function index(){
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', ['testimonial'=>$testimonials]);
    }

    public function webView(){
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->get();
        return view('testimonial', ['testimonial'=>$testimonials]);
    }

    public function viewDetails($id){
        $project = Testimonial::find($id);
        return view('admin.testimonial.details', ['item'=>$project]);
    }

    public function addView(){
        return view('admin.testimonial.add');
    }

    public function insertProject(Request $request)
    {
        $user = Auth::user();
        $projectTitle = Input::get('title');
        $projectDescription = Input::get('description');

       /* $images = implode(',', Input::get('images'));*/
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
        }


        $file = new Testimonial();
        $file->filename=json_encode($data);
        $file->url = Input::get('ref_url');
        $file->user_id = $user->id;
        $file->title = $projectTitle;
        $file->description = $projectDescription;


        $file->save();
        ActivityLogsController::insertLog("Insert Project", $file->id, "project");

        return back()->with("success","Data Added Successfully!");

    }

    public function trashProject($id){
        $project = Testimonial::find($id);
        $project->status = 'Disable';
        $project->save();
        return $this->index();
    }

    public function destroyProject($id){
        $project = Testimonial::find($id);
        $project->delete();
        return $this->index();

    }
}
