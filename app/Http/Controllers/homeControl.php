<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $data=manager::all();
            return view("admin.manager", compact('data'));
        }
        else if($typeuser=='2')
        {
            
            
            $data=manager::all();
            return view("admin.leader", compact('data'));
        }

        else
        {
            $data=manager::all();
            return view("admin.member", compact('data'));
        }
    }

    
}
