<div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
       <div class="card-header ">
            <b>Appointment</b>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
       </div>
       <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
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
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                    <th></th>
                    <th>patient name</th>
                    <th>email</th>
                     <th>phone</th>
                    <th>notes</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->name}}</td>
                    <td>{{$appointment->email}}</td>
                    <td>{{$appointment->phone}}</td>
                    <td>{{$appointment->notes}}</td>
                    <td>
                        <button class="btn btn-sm btn-success" data-toggle="modal"
                        data-target="#approval{{$appointment->id}}"><i class="fas fa-check"></i>
                </button>
                <button class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#Refusal{{$appointment->id}}"><i class="fas fa-remove-format"></i>
                </button>
                    </td>
                            
                    </tr>
                   
                    @include('livewire.appointments.approval')
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
</div>    
    </div>
</div>
</div>
</div>
