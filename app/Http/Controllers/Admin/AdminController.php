<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ImgProject;
use App\Models\Interest;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Soft_skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $profiles = Profile::all();
        $education = Education::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $soft_skills = Soft_skill::all();
        $awards = Award::all();
        $interests = Interest::all();
        $projects = Project::with('imgProject')->get();

        return view('/admin.admin', compact('profiles','education', 'experiences', 'skills', 'soft_skills', 'awards','interests','projects'));
    }


    public function storeProfile(Request $request)
    {
        $profile = new Profile();

        if ($request->name && $request->tag_name && $request->description && $request->img_profile && $request->img_header){
            $profile->name = $request->input('name');
            $profile->tag_name = $request->input('tag_name');
            $profile->description = $request->input('description');
            $profile->img_profile = $request->file('img_profile')->store('img_profile');
            $profile->img_header = $request->file('img_header')->store('img_profile');;
            $profile->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function updateProfile(Request $request, $id)
    {
        $profile = Profile::find($id);

        if (isset($request->img_profile)) {
            if ($profile->img_profile && Storage::exists($profile->img_profile)) {
                Storage::delete($profile->img_profile);
            }
            $path_profile = Storage::putFile('img_profile', $request->file('img_profile'));
            $profile->img_profile = $path_profile;

        } elseif (isset($request->img_header)) {
            if ($profile->img_header && Storage::exists($profile->img_header)) {
                Storage::delete($profile->img_header);
            }
            $path_header = Storage::putFile('img_profile', $request->file('img_header'));
            $profile->img_header = $path_header;
        }

            $profile->name = $request->name;
            $profile->tag_name = $request->tag_name;
            $profile->description = $request->description;

        $profile->save();

        return redirect()->route('admin');
    }

    public function destroyProfile($id)
    {
        $profile = Profile::find($id);
        if (isset($profile)){
            $img_profile = $profile->img_profile;
            $img_header = $profile->img_header;
            Storage::delete([$img_profile, $img_header]);
            $profile->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeEducation(Request $request)
    {
        $education = new Education();
        if ($request->institution && $request->course && $request->type_course && $request->time_course){
            $education->institution = $request->input('institution');
            $education->course = $request->input('course');
            $education->type_course = $request->input('type_course');
            $education->time_course = $request->input('time_course');
            $education->status = $request->input('status');
            $education->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');

    }

    public function updateEducation(Request $request, $id)
    {
        $experience = Education::find($id);

        $experience->institution = $request->input('institution');
        $experience->course = $request->input('course');
        $experience->type_course = $request->input('type_course');
        $experience->time_course = $request->input('time_course');
        $experience->status = $request->input('status');
        $experience->save();
        return redirect()->route('admin');
    }

    public function destroyEducation($id)
    {
        $education = Education::find($id);
        if (isset($education)){
            $education->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeExperience(Request $request)
    {
        if ($request->job_title && $request->link_reference && $request->description_experience){
            $experience = new Experience();
            $experience->job_title = $request->input('job_title');
            $experience->link_reference = $request->input('link_reference');
            $experience->description_experience = $request->input('description_experience');
            $experience->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function updateExperience(Request $request, $id)
    {
        if ($request->job_title && $request->link_reference && $request->description_experience){
            $experience = Experience::find($id);

            $experience->job_title = $request->input('job_title');
            $experience->description_experience = $request->input('description_experience');
            $experience->link_reference = $request->input('link_reference');
            $experience->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function destroyExperience($id)
    {
        if ($id){
            $experience = Experience::find($id);
            $experience->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeSkill(Request $request)
    {
        $skills = new Skill();
        if ($request->name && $request->icon_skill){
            $skills->name = $request->input('name');
            $skills->icon_skill = $request->input('icon_skill');
            $skills->color_skill = $request->input('color_skill');
            $skills->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');

    }

    public function destroySkill($id)
    {
        $skill = Skill::find($id);
        if (isset($skill)){
            $skill->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeSoftSkill(Request $request)
    {
        $soft_skills = new Soft_skill();
        if ($request->name){
            $soft_skills->name = $request->input('name');
            $soft_skills->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');

    }

    public function destroySoftSkill($id)
    {
        $soft_skill = Soft_skill::find($id);
        if (isset($soft_skill)){
            $soft_skill->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeAward(Request $request)
    {
        $awards = new Award();
        if ($request->name && $request->link){
            $awards->name = $request->input('name');
            $awards->institution = $request->input('institution');
            $awards->link = $request->input('link');
            $awards->certification = $request->file('certification')->store('certification');
            $awards->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function destroyAward($id)
    {
        $award = Award::find($id);
        if (isset($award)){
            $certification = $award->certification;
            Storage::delete($certification);
            $award->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeInterest(Request $request)
    {
        if ($request->description){
            $interest = new Interest();
            $interest->description = $request->input('description');
            $interest->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }


    public function updateInterest(Request $request, $id)
    {
        if ($request->description){
            $interest = Interest::find($id);
            $interest->description = $request->input('description');
            $interest->save();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function destroyInterest($id)
    {
        $interest = Interest::find($id);
        if (isset($interest)){
            $interest->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

    public function storeProject(Request $request)
    {
        $project = new Project();
        if ($request->title && $request->description && $request->url_project){
            $project->title = $request->title;
            $project->description = $request->description;
            $project->url_project = $request->url_project;
            $project->save();

            if ($request->hasFile('img_project')){
                $images = $this->imgProject($request, 'img_project');
                $project->imgProject()->createMany($images);
            }

           //return redirect()->route('admin');
            return redirect('/admin')->with("success","Projeto Inserido com Sucesso");
        }
        return redirect('/admin')->with("error","Ocorreu um erro inexperado");

    }

    private function imgProject(Request $request, $imgProjectColum){
        $images = $request->file('img_project');
        $uploadImages = [];

        foreach ($images as $img){
            $uploadImages[] = [$imgProjectColum => $img->store('img_project')];
        }
        return $uploadImages;
    }

    public function destroyProject($id)
    {
        $project = Project::with('imgProject')->find($id);

        if (isset($project)) {
            foreach ($project->imgProject as $img){
                Storage::delete($img->img_project);
            }
            $project->delete();
            return redirect()->route('admin');
        }
        return redirect()->route('admin');
    }

}
