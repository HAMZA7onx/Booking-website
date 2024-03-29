<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizerSubController extends Controller
{
    public function subscribe() {
        auth()->user()->syncRoles([]);
        auth()->user()->assignRole('organizer_lvl4');

        return redirect()->back()->with('success', 'Subscribtion Was Handled Successfully');
    }

    public function unsubscribe() {
        auth()->user()->syncRoles([]);
        auth()->user()->assignRole('user');

        return redirect()->back()->with('success', 'Unsubscribtion Was Handled Successfully');
    }
}
