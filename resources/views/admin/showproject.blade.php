<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.leadernavbar")
  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Project</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Project Type</th>
                                            <th>Project Name</th>
                                            <th>Project Leader</th>
                                            <th>Project Member ID</th>
                                            <th>Project Start Date</th>
                                            <th>Project End Date</th>
                                            <th>Project Duration</th>
                                            <th>Project Cost</th>
                                            <th>Project Client</th>
                                            <th>Project Project Stage</th>
                                            <th>Project Project Status</th>
                                    
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($x as $paper)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>
                                                @if($paper->project_type=='1') 
                                            
                                                    Consultancy Project 
                                                @else
                                            
                                                    Research Grant Project
                                            
                                                @endif
                                            
                                            <td>{{$paper->project_name}}</td>

                                            <td>
                                                @if($paper->project_leader==$paper->id)
                                            
                                                    {{$paper->name}}
                                            
                                                @endif
                                            </td>

                                            <td>
                                                @if($paper->project_member)
                                            
                                                    {{$paper->project_member}}
                                            
                                                @endif
                                            </td>

                                            <td>{{$paper->start_date}}</td>
                                            <td>{{$paper->end_date}}</td>
                                            <td>{{$paper->duration}}</td>
                                            <td>{{$paper->cost}}</td>
                                            <td>{{$paper->client}}</td>
                                            <td>{{$paper->project_stage}}</td>
                                            <td>{{$paper->project_status}}</td>

                                            <td>
                                 
                                               
                                                <a href="{{"update/".$paper->project_id}}">
                                                <button type="button" class="btn btn-success">Update Details </button>
                                                </a> </href> 
                                                
                                                
                                              
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="modal fade" id="demoModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                         <div class="modal-header">
                                            <h4 class="modal-title" align="center"><b>Edit Project </b></h4>
                    
                                        </div>
                                            <div class="modal-body">
                                                 <form action="/edit" method="POST">
                                                 @csrf
                                                        <div class="box-body">
          
                                                                <div class="form-group">
                                                                     <label for="exampleInputEmail1">Project Type</label> 
                    
                                                                         <select name="select" id="select" class="form-control">
                           
                                                                                <option value="1">Consultancy project</option>
                                                                                <option value="2">Research grant project</option>
                           
                                                                         </select>
                    
                                                                </div>

                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Project Name</label> 
                                                                    <input type="text" class="form-control" name="username" placeholder="Enter username" value="">
                                                                </div>

                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Project Type</label> 
                    
                                                                     <select name="select" id="select" class="form-control">
                           
                                                                        <option value="1">Consultancy project</option>
                                                                        <option value="2">Research grant project</option>
                           
                                                                    </select>
                    
                                                 </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div>

  @include("admin.adminscript")
  </body>
</html>