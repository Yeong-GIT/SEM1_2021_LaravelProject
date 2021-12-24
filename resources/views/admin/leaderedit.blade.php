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
  <div class="card">
        <div class="card-header">
            
            <strong><center>Edit Project</center></strong> 
        <div class="card-body card-block">
        <form action="/editleader" method="post" enctype="multipart/form-data" class="form-horizontal">    
            @csrf
            <input type="hidden" value="{{$x['project_id']}}" name="project_id">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Type</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select" id="select" class="form-control" disabled>
                           
                            <option {{$x['project_type'] == '1' ? 'selected' : '' }} value="1">Consultancy project</option>
                            <option {{$x['project_type'] == '2' ? 'selected' : '' }} value="2">Research grant project</option>
                           
                        </select>
                    </div>
                </div>
                    
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Project Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="project" value="{{$x['project_name']}}" class="form-control"readonly><small class="form-text text-muted" ></small></div>
                </div>
                {{ old('title') == '1' ? 'selected' : '' }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Leader</label></div>
                    <div class="col-12 col-md-9">
                    <select name="select1" id="select" class="form-control" disabled>
                       
                       @foreach($data as $d) 
                       
                       @if ($d->role=='1') 
                       <option value="{{$x->project_leader}}"{{$d->id==$x->project_leader ? 'selected="selected"' : '' }}">{{ $d->name }}</option>

                 
                       @endif
                     
                       @endforeach
                       </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Start Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="sd" value="" class="form-control"><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">End Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="ed" placeholder="Enter End Date" class="form-control"><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duration</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="duration" placeholder="Enter Duration in months"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="cost" placeholder="Enter Cost exm: RM2000"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="client" placeholder="Enter Client Name"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Members</label></div>
                        <div class="col-12 col-md-9">   
        
                            <select name="select5[]" data-placeholder="Choose Team Members " multiple class="standardSelect" class="form-control">
                                @foreach($data as $d)
                     
                                @if ($d->role=='2') 
                            
                                
                                <option value="{{$d->id }}">{{ $d->name }}</option>
                                @endif
                            
                                @endforeach  
                                </select>

                        </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project progress</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select6" class="form-control">
                            <option value="" selected disabled hidden>Select Project Progress </option>
                            <option value="1">Inception</option>
                            <option value="2">Milestone 1</option>
                            <option value="3">Milestone 2</option>
                            <option value="4">Final Report</option>
                            <option value="5">Closing</option>
                           
                        </select>
                    </div>
                </div>
       

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Status</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select7" id="select" class="form-control">
                            <option value="" selected disabled hidden>Select Project Status </option>
                            <option value="1">On track</option>
                            <option value="2">Delayed</option>
                            <option value="3">Extended</option>
                            <option value="4">Completed</option>
                            
                            
                        </select>
                    </div>
                </div>
              
           
     
        <div class="card-footer">
            <button type="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Edit </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
           
        </div>
       
</form>
    </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div>

  @include("admin.adminscript")
  </body>
</html>