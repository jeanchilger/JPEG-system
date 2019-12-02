<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Receipt;
use App\ExpenseCategory;
use App\ReceiptCategory;

class FinancesController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index() {
        /*
         * Returns the view for finances,
         * with necessaries values.
         * */

        // dd(Expense::getMonthExpensesByCategory());
        ExpenseCategory::createCategories();
        ReceiptCategory::createCategories();

        return view("finances.finances", [
            "totalExpenses" => Expense::getTotalMonthValue(),
            "totalReceipts" => Receipt::getTotalMonthValue(),
            "monthExpenses" => Expense::getMonthExpensesByCategory(),
            // "monthReceipts" => Receipt::getMonthReceiptsByCategory()
        ]);
    }
}
