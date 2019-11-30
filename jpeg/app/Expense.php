<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Console\Command;

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
            $startDate = CarbonImmutable::now() -> firstOfMonth();
        }

        if (!$endDate) {
            $endDate = CarbonImmutable::now();
        }

        $totalPerWeek = array();

        print_r("END: " . $endDate. "<br>");
        while ($startDate -> lt($endDate)) {
            print_r($startDate . "<br>");
            $total = 0;
            $date = $startDate -> format("d/m/Y");
            $expenses = Expense::all() -> where("date", ">=", $startDate)
                                       -> where("date", "<=", $startDate -> addWeek());

            foreach ($expenses as $expense) {
                $total += $expense -> value;
            }

            array_push($totalPerWeek, array("total" => $total,
                                            "startDate" => $date,
                                            "endDate" => $startDate -> format("d/m/Y")
                                        ));
        }

        return $totalPerWeek;

    }
}
