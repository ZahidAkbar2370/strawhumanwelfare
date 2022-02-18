<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fundriser;

class FundriserController extends Controller
{

    public function fundriser()

    {
        return view('Admin.Fundriser.add_fundriser');
    }

    public function addfundriser(Request $req)

    {
        $addfundriser = Fundriser::create([
            'name' => $req->name,
            'email' => $req->email,
            'mobile_no' => $req->mobile_no,
            'whatsapp_no' => $req->whatsapp_no,
            'address' => $req->address,
            'status' => "0",
        ]);

        return redirect('fundriser');
    }

    public function viewfundrisers()

    {
        $fundrisers = Fundriser::all();
        return view('Admin.Fundriser.view_fundrisers')->with('fundrisers',$fundrisers);
    }

    public function destroyfundriser($id)

    {
        $destroy = Fundriser::find($id);
        $destroy -> delete();
        return redirect('view-fundrisers');

    }

    public function editfundriser($id)

    {
        $editfundriser = Fundriser::find($id);
        return view('Admin.Fundriser.edit_fundriser', ["editfundriser" => $editfundriser]);
    }

    public function updatefundriser(Request $req)

    {
        $updatefundriser = Fundriser::find($req->id);
        $updatefundriser->name = $req->name;
        $updatefundriser->email = $req->email; 
        $updatefundriser->mobile_no = $req->mobile_no; 
        $updatefundriser->whatsapp_no = $req->whatsapp_no; 
        $updatefundriser->address = $req->address; 
        $updatefundriser->update();
        return redirect('view-fundrisers');
    }
}
