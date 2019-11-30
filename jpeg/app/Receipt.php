<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Receipt extends Model
{
    //
    public static function getTotalValue() {
        $receipts = Receipt::all();
        $total = 0;

        foreach ($receipts as $receipt) {
            $total += $receipt -> value;
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

        while ($startDate -> lt($endDate)) {
            $total = 0;
            $date = $startDate -> format("d/m/Y");
            $receipts = Receipt::all() -> where("date", ">=", $startDate)
                                       -> where("date", "<=", $startDate -> addWeek());

            foreach ($receipts as $receipt) {
                $total += $receipt -> value;
            }

            array_push($totalPerWeek, array("total" => $total,
                                            "startDate" => $date,
                                            "endDate" => $startDate -> format("d/m/Y")
                                        ));
        }

        return $totalPerWeek;

    }
}
