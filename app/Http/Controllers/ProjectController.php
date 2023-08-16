<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request){
        return view('pages.projects');
    }

    function postSingleProjectDetails(Request $request){
        $aboutDetails = $request->input();

        $affected = DB::table('projects')->insert($aboutDetails);

        return response()->json(['msg' => 'Projects Properties saved successfully!'], 200);
    }

    function getAllProjectDetails(Request $request){
        $allProjectDetails = DB::table('projects')->get();
        return $allProjectDetails;
    }
}
