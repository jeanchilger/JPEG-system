<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    public static function getNextEvents() {
        /*
         * Returs the next events based on current date.
         * */

        $startDate = Carbon::now() -> addWeeks(-2) -> format('Y-m-d');
        $endDate = Carbon::now() -> addWeeks(2) -> format('Y-m-d');

        $events = Event::all() -> where("date", ">=", $startDate)
                               -> where("date", "<=", $endDate);

        return $events;

    }
}
