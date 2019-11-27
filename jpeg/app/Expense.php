<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    public static function getTotalValue() {
        $expenses = Expense::all();
        $total = 0;

        foreach ($expenses as $expense) {
            $total += $expense -> value;
        }

        return $total;
    }
}
