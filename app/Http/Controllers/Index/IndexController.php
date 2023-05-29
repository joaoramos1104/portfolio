<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Soft_skill;
use Illuminate\Http\Request;

class IndexController extends Controller
{
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

        return view('/app.index', compact('profiles','education', 'experiences', 'skills','soft_skills', 'awards','interests','projects'));
    }

    public function email(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new ContactForm($request);

        try {
            $contact->sendEmail();
            $status['success'] = true;
            $status['message'] = "success, Obrigado pelo Contato.";
            echo json_encode($status);

        }catch (\Exception $status){
            //$status['success'] = false;
            $status['message'] = "Algo deu errado, tente novamente mais tarde!";
            echo json_encode($status);
            //return redirect(route('index'))->with("error","Ocorreu um erro inexperado: {$error->getMessage()}");
        }

    }
}
