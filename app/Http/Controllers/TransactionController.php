<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transactions= Transaction::orderBy('date','desc')->get();
        $runningBalance=0;
        foreach ($transactions->reverse() as $transaction) {
            $transaction->running_balance=$runningBalance += $transaction->type === 'credit'? $transaction->amount : - $transaction->amount;
        }
        return view('transactions.index',compact('transactions'));
    }
    public function create(){
        return view('transactions.create');
    }
    public function store(Request $request){
       // dd($request->all());
        $request->validate([
            'date'=> 'required|date',
            'description'=>'required|string|max:255',
            'type'=>'required|in:credit,debit',
            'amount'=>'required|numeric|min:0.01'
        ]);

        Transaction::create($request->all());
        return redirect()->route('transactions.index');
    }
}
