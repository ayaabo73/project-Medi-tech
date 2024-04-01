<div>
    <div class="row justify-content-center">
       <div class="col-12">
    <div class="card">
        <div class="card-header ">
            <b>Doctors</b>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
          
           <a href="javascript:void(0);" wire:click="create_doctor" class="btn btn-primary btn-sum ">Add Doctor</a>
       </div>
       <div class="card-body">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
           @if(session()->has('message'))
  <div class="alert alertdismissablr alert-success">
      
      {{ session('message') }}
        
      &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span> </button>
        
        
       </div>@endif
    <div class="table-responsive">
            <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
            <thead>
                <tr>
                    <th></th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Section</th>
                    <th>Phone</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->image}}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->section->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->location }}</td>
                        
                        <td>
                            <button wire:click="edit_doctor({{ $doctor->id }})" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_doctor{{$doctor->id}}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                  @include('livewire.admin.delete_doctor')
                  @include('livewire.admin.create_doctor')
                @endforeach
        </table>
    
    </div>
    
    
    
    
 </div>
 
