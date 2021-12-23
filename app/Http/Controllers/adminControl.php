<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\manager;
use App\Models\project;

class adminControl extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function createprojectview()
    {
        $data=user::all();
        return view("admin.createproject",compact("data"));
    }

    function saveData(Request $req)
    {
    $data=manager::all();
    $member =new project;
    $member->project_type = $req->select;
    $member->project_name = $req->project;
    $member->project_leader = $req->select1;
    $member->save();
    return view ('admin.createproject', compact('data'));
    }

    

    public function manageproject()
    {
        $data=user::all();
        return view("admin.manageproject",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    
}
