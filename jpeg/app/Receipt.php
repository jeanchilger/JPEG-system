<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
