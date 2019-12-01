<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonImmutable;


class Receipt extends Model
{
    //
    public static function getTotalMonthValue() {
        /*
        * Returns the total value of expenses,
        * for the current month.
        * */

        $receipts = Receipt::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                                   -> where("date", "<=", Carbon::now() -> lastOfMonth());
        $total = 0;

        foreach ($receipts as $receipt) {
            $total += $receipt -> value;
        }

        return $total;
    }

    public static function getMonthReceipts() {
        /*
         * Returns the receipts for the current month.
         * */

        return Receipt::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                              -> where("date", "<=", Carbon::now() -> lastOfMonth());
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
            $receipts = Receipt::all() -> where("date", ">=", $startDate)
                                       -> where("date", "<=", $startDate -> addWeek());

            foreach ($receipts as $receipt) {
                $total += $receipt -> value;
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
