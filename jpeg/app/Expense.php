<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class Expense extends Model
{
    //
    public static function getTotalMonthValue() {
        /*
         * Returns the total value of expenses,
         * for the current month.
         * */

        $expenses = Expense::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                                   -> where("date", "<=", Carbon::now() -> lastOfMonth());
        $total = 0;

        foreach ($expenses as $expense) {
            $total += $expense -> value;
        }

        return $total;
    }

    public static function getMonthExpenses() {
        /*
         * Returns the expenses for the current month.
         * */

        return Expense::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                              -> where("date", "<=", Carbon::now() -> lastOfMonth());
    }

    public static function getMonthExpensesByCategory() {
        /*
         * Returns the expenses for the current month,
         * grouped by category.
         * */

        // return Expense::raw("SELECT sum(value) as total, category
        //                      FROM expenses WHERE
        //                      (date BETWEEN " . Carbon::now() -> firstOfMonth() . "
        //                       AND" . Carbon::now() -> lastOfMonth() . ")
        //                      GROUP BY category;");
        $expenses = Expense::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                                   -> where("date", "<=", Carbon::now() -> lastOfMonth());

        $expensesByCategory = array();

        foreach ($expenses as $expense) {
            if (empty($expensesByCategory[$expense -> category])) {
                $expensesByCategory[$expense -> category] = $expense -> value;

            } else {
                $expensesByCategory[$expense -> category] += $expense -> value;
            }
        }

        return $expensesByCategory;
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
            $startDate = CarbonImmutable::now() -> firstOfMonth();
        }

        if (!$endDate) {
            $endDate = CarbonImmutable::now();
        }

        $totalPerWeek = array();

        while ($endDate -> gt($startDate)) {
            $total = 0;
            $date = $startDate -> format("d/m/Y");
            $expenses = Expense::all() -> where("date", ">=", $startDate)
                                       -> where("date", "<=", $startDate -> addWeek());

            foreach ($expenses as $expense) {
                $total += $expense -> value;
            }

            $startDate = $startDate -> addWeek();

            array_push($totalPerWeek, array("total" => $total,
                                            "startDate" => $date,
                                            "endDate" => $startDate -> format("d/m/Y")
                                        ));
        }

        return $totalPerWeek;
    }
}
