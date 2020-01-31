<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipt;
use Carbon\Carbon;

class ReceiptController extends Controller
{
    //
    public function store(Request $request) {
        /*
         * Stores in the database a
         * single receipt.
         * */

        $receipt = new Receipt();

        $receipt -> value = $request -> value;
        $receipt -> date = Carbon::createFromFormat("d/m/Y", $request->date)
                            ->format("Y-m-d");
        $receipt -> category = $request -> category;
        $receipt -> description = $request -> description;

        $receipt -> save();

        return redirect() -> route("finances");
    }

}
