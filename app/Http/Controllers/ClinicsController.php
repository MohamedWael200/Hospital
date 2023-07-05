<?php

namespace App\Http\Controllers;

use App\Models\Clinics;
use App\Models\Doctors;
use App\Models\Paient;
use App\Models\Programs;
use App\Models\Review;
use Illuminate\Http\Request;

class ClinicsController extends Controller
{
    //
    public function clinics(){
        $clincis = Clinics::all();
        $programs = Programs::all();
        $AllDoctors = Doctors::all();
        $AllReview = Review::all();
        return view('index',['clincis' => $clincis ,
            'programs' => $programs,
            'AllDoctors' => $AllDoctors ,
            'AllReview' =>$AllReview]);
    }

    public function about(){
        $AllDoctors = Doctors::all();
        return view('about',['AllDoctors' => $AllDoctors]);
    }

    public function service(){
        $clincis = Clinics::all();
        $AllReview = Review::all();
        return view('service',['clincis' => $clincis , 'AllReview' =>$AllReview]);
    }

    public function price(){
        $programs = Programs::all();
        $AllDoctors = Doctors::all();
        return view('price',[ 'programs' => $programs,
            'AllDoctors' => $AllDoctors]);

    }

    public function addClinic(){
        return view('admin/AddClinic');
    }

    public function saveClinic(Request $request){
        Clinics::create([
            'clinicName' =>$request->clinicName,
            'clinicDescription' => $request->clinicDescription,
        ]);
        return redirect()->route('AdminDasboard');
    }

    public function AdminDasboard(){
        $Doctorcount = Doctors::count();
        $ClincCount = Clinics::count();
        $paientCount = Paient::count();
        $programCount = Programs::count();
        return view('admin/index',['Doctorcount' =>$Doctorcount ,
            'programCount' => $programCount ,
            'ClincCount' => $ClincCount,
            'paientCount' => $paientCount,
            ]);
    }
}
