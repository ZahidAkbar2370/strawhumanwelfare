<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function expense()

    {
        return view('Admin.Expense.add_expense');
    }

    public function addexpense(Request $req)

    {
        $addexpense = Expense::create([
            'title' => $req->title,
            'price' => $req->price,
            'description' => $req->description,
        ]);

        return redirect('expense');
    }

    public function viewexpenses()

    {
        $expenses = Expense::all();
        return view('Admin.Expense.view_expenses')->with('expenses',$expenses);
    }

    public function destroyexpense($id)

    {
        $destroy = Expense::find($id);
        $destroy -> delete();
        return redirect('view-expenses');

    }

    public function editexpense($id)

    {
        $editexpense = Expense::find($id);
        return view('Admin.Expense.edit_expense', ["editexpense" => $editexpense]);
    }

    public function updateexpense(Request $req)

    {
        $updateexpense = Expense::find($req->id);
        $updateexpense->title = $req->title;
        $updateexpense->price = $req->price; 
        $updateexpense->description = $req->description; 
        $updateexpense->update();
        return redirect('view-expenses');
    }
}
