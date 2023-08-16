<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function page(Request $request){
        return view('pages.resume');
    }

//    post education detils
function postEducationDetails(Request $request){
        $formData = $request->input();

        $affected = DB::table('educations')->insert($formData);

        return response()->json(['msg' => 'Education details saved successfully!'], 200);
}

    function getEducationDetails(Request $request){
        $educationalDetails = DB::table('educations')->get();
        return $educationalDetails;
    }

    function postExperienceDetails(Request $request){
        $formData = $request->input();

        $affected = DB::table('experiences')->insert($formData);

        return response()->json(['msg' => 'Experiences details saved successfully!'], 200);
    }

    function getExperienceDetails(Request $request){
        $formData = $request->input();
        $experienceDetails = DB::table('experiences')->get();
        return $experienceDetails;
    }

    function postLanguageDetails(Request $request){
        $formData = $request->input();

        $affected = DB::table('languages')->insert($formData);

        return response()->json(['msg' => 'Languages details saved successfully!'], 200);
    }

    function getLanguageDetails(Request $request){
        $LanguageDetails = DB::table('languages')->get();
        return $LanguageDetails;
    }

    function postProfessionalSkill(Request $request){
        $formData = $request->input();

        $affected = DB::table('skills')->insert($formData);

        return response()->json(['msg' => 'Skill details saved successfully!'], 200);
    }

    function getProfessionalSkill(Request $request){
        $allProffessionalSkills = DB::table('skills')->get();
        return $allProffessionalSkills;
    }

    function postResumeLink(Request $request){
        $formData = $request->input();

        $affected = DB::table('resumes')->insert($formData);

        return response()->json(['msg' => 'Resume link saved successfully!'], 200);
    }

    function getResumeLink(Request $request){
        $resumeLink = DB::table('resumes')->get();
        return $resumeLink;
    }
}
