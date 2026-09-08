<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users()
    {
        return User::withCount('tasks')
            ->select('id', 'name', 'email', 'role', 'created_at')
            ->latest()
            ->paginate(10);
    }
}
