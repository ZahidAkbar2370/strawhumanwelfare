<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fundriser;
use App\Models\Fund;

class FundController extends Controller
{
    public function fund()

    {
        $fundrisers = Fundriser::all();
        return view('Admin.Funds.add_fund')->with('fundrisers',$fundrisers);
    }

    public function addfund(Request $req)

    {
        $addfund = Fund::create([
            'fundriser_id' => $req->name,
            'amount' => $req->amount,
            'pay_through' => "0",
        ]);

        return redirect()->back()->with('success' , 'Your fund added succesfully!');
    }

    public function viewfunds()

    {
        $funds = Fund::all();
        return view('Admin.Funds.view_funds')->with('funds',$funds);
    }

    public function destroyfund($id)

    {
        $destroy = Fund::find($id);
        $destroy -> delete();
        return redirect('view-funds');

    }

    public function editfund($id)

    {
        $editfund = Fund::find($id);
        $fundrisers = Fundriser::all();
        return view('Admin.Funds.edit_fund')->with('editfund' , $editfund)->with('fundrisers' , $fundrisers);
    }

    public function updatefund(Request $req)

    {
        $updatefund = Fund::find($req->id);
        $fundriser_id = $req->name;
        $updatefund->amount = $req->amount; 
        $updatefund->update();
        return redirect('view-funds');
    }
}
