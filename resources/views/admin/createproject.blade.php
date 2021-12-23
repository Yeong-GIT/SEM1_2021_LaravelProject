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

<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            
            <strong><center>Create Project</center></strong> 
        <div class="card-body card-block">
            <form action="/add" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Type</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="" selected disabled hidden>Select Project Type</option>
                            <option value="1">Consultancy project</option>
                            <option value="2">Research grant project</option>
                           
                        </select>
                    </div>
                </div>
                    
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Project Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="project" placeholder="Enter project" class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Leader</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select1" id="select" class="form-control">
                       
                        @foreach($data as $data) 
                        @if ($data->role=='1') 
                        <option value="" selected disabled hidden>Select Project Leader</option>
                        <option value="{{$data->id }}">{{ $data->name }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>
                </div>
              
</div>
                 
</div>

           
     
        <div class="card-footer">
            <button type="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
       
    </div>
</div><!-- .animated -->
</div><!-- .content -->

</div>
</div>
  @include("admin.adminscript")
  </body>
</html>