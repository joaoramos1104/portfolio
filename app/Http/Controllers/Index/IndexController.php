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
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        $education = Education::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $awards = Award::all();
        $interests = Interest::all();
        $projects = Project::with('imgProject')->get();

        return view('/app.index', compact('profiles','education', 'experiences', 'skills', 'awards','interests','projects'));
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
            return redirect(route('index'))->with('success','Obrigado pelo Contato.');

        }catch (Exception $error){
            return redirect(route('index'))->with("error","Ocorreu um erro inexperado: {$error->getMessage()}");
        }

    }
}
