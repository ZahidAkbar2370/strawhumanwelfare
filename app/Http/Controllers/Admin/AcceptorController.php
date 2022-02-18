<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acceptor;

class AcceptorController extends Controller
{
    public function acceptor()

    {
        return view('Admin.Acceptor.add_acceptor');
    }

    public function addacceptor(Request $req)

    {
        $addacceptor = Acceptor::create([
            'name' => $req->name,
            'mobile_no' => $req->mobile_no,
            'address' => $req->address,
            'status' => "0",
        ]);

        return redirect('acceptor');
    }

    public function viewacceptors()

    {
        $acceptors = Acceptor::all();
        return view('Admin.Acceptor.view_acceptors')->with('acceptors',$acceptors);
    }

    public function destroyacceptor($id)

    {
        $destroy = Acceptor::find($id);
        $destroy -> delete();
        return redirect('view-acceptors');

    }

    public function editacceptor($id)

    {
        $editacceptor = Acceptor::find($id);
        return view('Admin.Acceptor.edit_acceptor', ["editacceptor" => $editacceptor]);
    }

    public function updateacceptor(Request $req)

    {
        $updateacceptor = Acceptor::find($req->id);
        $updateacceptor->name = $req->name;
        $updateacceptor->mobile_no = $req->mobile_no; 
        $updateacceptor->address = $req->address; 
        $updateacceptor->update();
        return redirect('view-acceptors');
    }
}
