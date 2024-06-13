<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Fetch all users with their attendances
        $users = User::with('attendances')->get();

        // Pass users data to the view using Inertia
        return Inertia::render('Dashboard', [
            'users' => $users,
        ]);
    }
}
