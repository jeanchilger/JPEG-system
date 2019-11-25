<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function show() {
        /*
         * Returns the view for schedule.
         * */

        $startDate = Carbon::now() -> addWeeks(-2) -> format('Y-m-d');
        $endDate = Carbon::now() -> addWeeks(2) -> format('Y-m-d');

        $events = Event::all() -> where("date", ">=", $startDate)
                               -> where("date", "<=", $endDate);

        return view("schedule", [
            "events" => $events
        ]);
    }

    public function store(Request $request) {
        /*
         * Stores in the database, a single
         * event.
         * */

        $event = new Event();

        $event -> name = $request -> name;
        $event -> date = Carbon::createFromFormat('d/m/Y', $request->date)
                            ->format('Y-m-d');
        $event -> time = $request -> time;
        $event -> location = $request -> location;
        $event -> people = $request -> people;

        $event -> save();

        return redirect() -> route("schedule");
    }

}
