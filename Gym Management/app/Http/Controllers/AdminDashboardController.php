<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        return view('admin.manage_users');
    }

    public function managePrograms()
    {
        return view('admin.manage_programs');
    }

    public function manageTrainers()
    {
        return view('admin.manage_trainers');
    }

    public function manageSchedule()
    {
        return view('admin.manage_schedule');
    }
}
