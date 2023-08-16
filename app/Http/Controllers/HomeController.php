<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request){
        return view('pages.home');
    }
    function postAaboutDetails(Request $request){
        $aboutDetails = $request->input();

        $affected = DB::table('abouts')->insert($aboutDetails);

        return response()->json(['msg' => 'Details saved successfully!'], 200);
    }

    function getAaboutDetails(Request $request){
        $aboutDetails = DB::table('abouts')->latest()->first();
        return $aboutDetails;
    }

    function postHeroproperties(Request $request){
        $aboutDetails = $request->input();

        $affected = DB::table('heroproperties')->insert($aboutDetails);

        return response()->json(['msg' => 'Hero Properties saved successfully!'], 200);
    }

    function getHeroproperties(Request $request){
        $heroProperties = DB::table('heroproperties')->get();
        return $heroProperties;
    }

    function postSeoProperties(Request $request){
        $aboutDetails = $request->input();

        $affected = DB::table('seoproperties')->insert($aboutDetails);

        return response()->json(['msg' => 'SEO properties saved successfully!'], 200);
    }

    function getSeoProperties(Request $request){
        $seoproperties = DB::table('seoproperties')->get();
        return $seoproperties;
    }

    function postSocialLinks(Request $request){
        $aboutDetails = $request->input();

        $affected = DB::table('socials')->insert($aboutDetails);

        return response()->json(['msg' => 'Socials Links saved successfully!'], 200);
    }

    function getSocialLinks(Request $request){
        $socialLinks = DB::table('socials')->get();
        return $socialLinks;
    }



}
