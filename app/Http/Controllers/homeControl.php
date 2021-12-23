<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\manager;
use App\Models\project;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }

    function redirectFunct()
    {
        $typeuser=Auth::user()->role;

        if($typeuser=='1')
        {
            return view("admin.manager");
        }

        else if($typeuser=='2')
        {
            return view('admin.leader');
        }

        else 
        {
            return view('admin.member');
        }
    }

    
}
