<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Expense extends Model
{
    //
    public static function getTotalValue() {
        /*
         * Returns the total value of expenses.
         * */

        $expenses = Expense::all();
        $total = 0;

        foreach ($expenses as $expense) {
            $total += $expense -> value;
        }

        return $total;
    }

    public static function getTotalPerWeek($startDate=0, $endDate=0) {
        /*
         * Returns an array with the total expenses
         * per week in the current month.
         *
         * The initial and final dates mat be passed by.
         * If no date is given, the range considered is
         * starting from the first day of the month until
         * current date.
         * */

        if (!$startDate) {
            $startDate = Carbon::now() -> firstOfMonth();
        }

        if (!$endDate) {
            $endDate = Carbon::now();
        }

        $totalPerWeek = array();

        while ($endDate -> gte($startDate)) {
            $expenses = Expense::all() -> where("date", ">=", $startDate)
                                       -> where("date", "<=", $startDate -> addWeek());
            // dd($startDate);
        }

    }
}
