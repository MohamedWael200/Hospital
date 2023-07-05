<?php

namespace App\Http\Controllers;

use App\Models\Clinics;
use App\Models\Doctors;
use App\Trait\UploadImageTrait;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    use UploadImageTrait;

    public function showAdd(){
        $Clinics = Clinics::all();
        return view('admin/AddDoctor',['Clinics' => $Clinics]);
    }
    public function doctorsInfo(Request $request){
        $path = $this->uploadImage($request->photo,'DoctorImage');
        Doctors::create([
            'DNAme' => $request->DNAme,
            'image'=>$path,
            'Ddescription' =>$request->Ddescription,
            'DGragute' =>$request->DGragute,
            'age' =>$request->age,
            'avilableDays' =>$request->avilableDays,
            'clinics_id' =>$request->clinics_id,
        ]);
        return redirect()->route('AdminDasboard');
    }

    public function DoctorOfClinic($id){
        $details = Clinics::findorfail($id)->doctors;
        return view('doctorClinics',['details' => $details]);
    }
}
