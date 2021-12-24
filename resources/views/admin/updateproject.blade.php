<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.managernavbar")

  <div class="card-body card-block">
            <form action="/editproject" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <input type="hidden" value="{{$x['project_id']}}" name="project_id">
            {{ old('title') == '1' ? 'selected' : '' }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Type</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                           
                            <option {{$x['project_type'] == '1' ? 'selected' : '' }} value="1">Consultancy project</option>
                            <option {{$x['project_type'] == '2' ? 'selected' : '' }} value="2">Research grant project</option>
                           
                        </select>
                    </div>
                </div>
                    
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Project Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="project" value="{{$x->project_name}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                {{ old('title') == '1' ? 'selected' : '' }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Leader</label></div>
                    <div class="col-12 col-md-9">
                    <select name="select1" id="select" class="form-control">
                       
                       @foreach($data as $data) 
                       @if ($data->role=='1') 
                       <option value="{{$data->id}}"{{$data->id==$x->project_leader ? 'selected="selected"' : '' }}">{{ $data->name }}</option>

                 
                       @endif
                       @endforeach
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

  @include("admin.adminscript")
  </body>
</html>

