<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cgpa_Controller extends Controller
{
    function index(){
        return view('cgpa');
    }

    function calculate(Request $request) {
        // dd($request);
        if($request->regulation == '2010'){
            // echo "$request->regulation";
            $result = (($request->first * 5)/100)  + ($request->second * 5)/100 + ($request->third * 5)/100  + ($request->fourth * 15)/100 + ($request->fifth * 15 )/100 + ($request->sixth * 20)/100 + ($request->seventh *  25)/100 + ($request->eighth * 10)/100 ;
            
            return redirect()->route('cgpa')->withInput()->with('result', $result);
            // return view('/', compact('result'));

        }
        elseif($request->regulation == '2016'){
            // echo "$request->regulation";
            
            $result = (($request->first * 5)/100)  + ($request->second * 5)/100 + ($request->third * 5)/100  + ($request->fourth * 10)/100 + ($request->fifth * 15 )/100 + ($request->sixth * 20)/100 + ($request->seventh *  25)/100 + ($request->eighth * 15)/100 ;
            

            // return redirect()->back()->withInput()->with(compact('result'));
            return redirect()->route('cgpa')->withInput()->with('result', $result);



        }
        else{
            // echo "$request->regulation";
            
            $result = (($request->first * 5)/100)  + ($request->second * 5)/100 + ($request->third * 10)/100  + ($request->fourth * 10)/100 + ($request->fifth * 20 )/100 + ($request->sixth * 20)/100 + ($request->seventh *  20)/100 + ($request->eighth * 10)/100 ;
            
            // return view('/', compact('result'));
            // return redirect()->back()->withInput()->with(compact('result'));
            return redirect()->route('cgpa')->withInput()->with('result', $result);

            

        }
    }

    // function reset(Request $request) {
    //     return back();
        
    // }
}
