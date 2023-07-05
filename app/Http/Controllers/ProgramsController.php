<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Paient;
use App\Models\Programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    //
    public function ShowPrograms($id){
        $program = Programs::findorfail($id);
        return view('book/bookProgram',['program' =>$program]);
    }

    public function session(Request $request){
        Paient::create([
            'PName'  =>  $request->PName,
            'PEmail' => $request->PEmail,
            'PPhone' => $request->PPhone,
            'programs_id' =>$request->programs_id,
//        dd($request->programs_id->id)
        ]);

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
//        return redirect()->route('clinic');
        $prodectName =  $request->get('ProgressName');
        $totalPrice = $request->get('programsPrice');

        $stwo0 = "00";
        $total = "$totalPrice$stwo0";

        $session = \Stripe\Checkout\Session::create([
           'line_items' =>[
               [
                   'price_data' => [
                       'currency' => 'USD',
                       'product_data' => [
                           "name" => $prodectName,
                       ],
                       'unit_amount' => $total,
                   ],
                   'quantity' => 1,
               ],
           ],
            'mode' => 'payment',
            'success_url' => route('success'),
//            'cancel_url' => route('showProgram/{id}'),
        ]);
        return redirect()->away($session->url);
    }

    public function success(){
        return "Complete Payment";
    }

    public function ShowSurgery(){
        $Doctors = Doctors::all();
        return view('admin/AddProgram',['Doctors' =>$Doctors]);
    }
    public function SaveSurgery(Request $request){
        Programs::create([
            'OperationName' =>$request->OperationName,
            'OperationDes' =>$request->OperationDes,
            'OperationCost' =>$request->OperationCost,
            'doctors_id' => $request->doctors_id,
//            dd( $request->doctors_id)
        ]);
        return redirect()->route('AdminDasboard');
    }
}
