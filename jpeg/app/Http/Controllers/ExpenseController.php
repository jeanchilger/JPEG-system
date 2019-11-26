<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function show() {
        /*
         * Returns the view for finances.
         * */

        return view("finances");
    }

    public function store(Request $request) {
        /*
         * Stores in the database a
         * single expense.
         * */

        // dd($request -> value);
        $expense = new Expense();

        $expense -> value = $request -> value;
        $expense -> date = Carbon::createFromFormat("d/m/Y", $request->date)
                            ->format("Y-m-d");
        $expense -> category = $request -> category;
        $expense -> description = $request -> description;

        $expense -> save();

        return redirect() -> route("finances");
    }

}
