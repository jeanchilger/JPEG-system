<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Receipt;

class FinancesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        /*
         * Returns the view for finances,
         * with necessaries values.
         * */

        return view("finances", [
            "totalExpenses" => Expense::getTotalValue(),
            "totalReceipts" => Receipt::getTotalValue()
        ]);
    }
}
