<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
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
                                    
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($x as $paper)
                                     @if($paper->id)
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
                                                
                                            
                                                    {{$paper->name}}
                                            
                                                
                                            </td>

                                            <td>
                                          
                                            <a href="{{"viewleader/".$paper->project_id}}">
                                                <button type="button" class="btn btn-warning">View </button>
                                                </a> </href> 
                                                
                                            <a href="{{"updateleader/".$paper->project_id}}">
                                                <button type="button" class="btn btn-primary">Edit </button>
                                                </a> </href> 
                                 
                                                   
                                                
                                                
                                               
                                               
                                              
                                            </td>
                                        </tr>
                                        
                                        @endif
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
  @include("admin.adminscript")
  </body>
</html>