<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function manageProject()
    {
    $x=DB::table('users')
    ->join('project_manager','users.id',"=",'project_manager.project_leader')->get();
    return view('admin.manageproject',['x'=>$x]);
 
    }

    function showProject($project_id)
    {
        $data=manager::all();
        $x=project::find($project_id);
        return view('admin.updateproject',['x'=>$x],['data'=>$data]);
      
    }

    function update(Request $req)
    {
        $data=project::find($req->project_id);
        $data->project_id=$req->project_id;
        $data->project_type=$req->select;
        $data->project_name=$req->project;
        $data->project_leader=$req->select1;
        $data->save();
        return redirect('/manageproject');

    }

    // function leader($project_id)
    // {
    //     $data=manager::all();
    //     $x=project::find($project_id);
    //     return view('admin.edit_leader',['x'=>$x],['data'=>$data]);
    
 
    // }

    function deleteProj($project_id)
    {
        $data=project::find($project_id);
        $data->delete();
        return redirect()->back();
    }

    

    function leader($project_id)
    {
        $data=manager::all();
        $x=project::find($project_id);
        return view('admin.leaderedit',['x'=>$x],['data'=>$data]);
    
 
    }

    function viewinvolve()
    {
        $x=DB::table('users')
    ->join('project_manager','users.id',"=",'project_manager.project_leader')->get();
    return view('admin.leaderedit',['x'=>$x]);
    
 
    }


    function viewproject(Request $req)
    {
        $data=manager::all();
        $x=project::find($project_id);
        return view('admin.editproject',['x'=>$x],['data'=>$data]);

    }

    function editdetails(Request $req)
    {
        $data=project::find($req->project_id);
        $data->project_id=$req->project_id;
        $data->project_type=$req->select;
        $data->project_name=$req->project;
        $data->project_leader=$req->select1;
        $data->save();
        return redirect('/leaderedit');

    }

    function show($project_id)
    {
        $data=manager::all();
        $x=project::find($project_id);
        return view('admin.leaderedit',['x'=>$x],['data'=>$data]);
    
 
    }
    function updateleader(Request $req)
    {
      
       $data=project::find($req->project_id);
       echo$data->project_id=$req->project_id;
       $data->start_date=$req->sd;
       $data->end_date=$req->ed;
        $data->duration=$req->duration;
       $data->cost=$req->cost;
       $data->client=$req->client;
       echo $data->project_member=implode(',',(array)$req->select5);
       $data->project_status=$req->select6;
       $data->project_stage=$req->select7;
       $data->save();
       return redirect('/redirect');
      
      

    }



    

    

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    
}
