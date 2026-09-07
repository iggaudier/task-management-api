<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class StatsController extends Controller
{
    public function index()
    {
        return response()->json([
            'total_users' => User::count(),
            'total_tasks' => Task::count(),
            'completed_tasks' => Task::where('completed', true)->count(),
            'pending_tasks' => Task::where('completed', false)->count(),
        ]);
    }
}
