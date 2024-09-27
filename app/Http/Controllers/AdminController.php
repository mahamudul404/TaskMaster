<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $tasks = Task::all();

        return view('admin.dashboard', compact('tasks'));
    }
}
