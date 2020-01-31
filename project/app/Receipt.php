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
        * Returns the total value of receipts,
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

    public static function getMonthReceiptsByCategory() {
        /*
         * Returns the receipts for the current month,
         * grouped by category.
         * */

        // return Receipt::raw("SELECT sum(value) as total, category
        //                      FROM receiprs WHERE
        //                      (date BETWEEN " . Carbon::now() -> firstOfMonth() . "
        //                       AND" . Carbon::now() -> lastOfMonth() . ")
        //                      GROUP BY category;");
        $receipts = Receipt::all() -> where("date", ">=", Carbon::now() -> firstOfMonth())
                                   -> where("date", "<=", Carbon::now() -> lastOfMonth());

        $receiptsByCategory = array();

        // dd($receipts);
        foreach ($receipts as $receipt) {
            if (empty($receiptsByCategory[$receipt -> category])) {
                $receiptsByCategory[$receipt -> category] = $receipt -> value;

            } else {
                $receiptsByCategory[$receipt -> category] += $receipt -> value;
            }
        }

        return $receiptsByCategory;
    }

    public static function getTotalPerWeek($startDate=0, $endDate=0) {
        /*
         * Returns an array with the total receipts
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
            $endDate = CarbonImmutable::now() -> lastOfMonth();
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
