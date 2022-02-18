<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distribution;
use App\Models\Acceptor;

class DistributionController extends Controller
{
    public function distribution()

    {
        $acceptors = Acceptor::all();
        return view('Admin.Distribution.add_distribution')->with('acceptors',$acceptors);
    }

    public function adddistribution(Request $req)

    {
        $adddistribution = Distribution::create([
            'acceptor_id' => $req->name,
            'amount' => $req->amount,
            'description' => $req->description,
            'status' => "bill_image.png",
        ]);

        return redirect('distribution');
    }

    public function viewdistributions()

    {
        $distributions = Distribution::all();
        return view('Admin.Distribution.view_distributions')->with('distributions',$distributions);
    }

    public function destroydistribution($id)

    {
        $destroy = Distribution::find($id);
        $destroy -> delete();
        return redirect('view-distributions');

    }

    public function editdistribution($id)

    {
        $editdistribution = Distribution::find($id);
        $acceptors = Acceptor::all();
        return view('Admin.Distribution.edit_distribution')->with('editdistribution' , $editdistribution)->with('acceptors' , $acceptors);
    }

    public function updatedistribution(Request $req)

    {
        $updatedistribution = Distribution::find($req->id);
        $acceptor_id = $req->name;
        $updatedistribution->amount = $req->amount; 
        $updatedistribution->description = $req->description; 
        $updatedistribution->bill = "bill_image.png"; 
        $updatedistribution->update();
        return redirect('view-distributions');
    }
}
