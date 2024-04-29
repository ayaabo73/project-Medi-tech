<div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
       <div class="card-header ">
            <b></b>
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
                    <th></th>
                    <th>name</th>
                    <th></th>
                    <th>Section</th>
                    <th></th>
                    <th></th>
                    <th></th><th></th><th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
              
                    <tr>
                        <td>{{ $patient->id}}</td><td></td>
                        <td>{{ $patient->name }}</td>
                        <td></td>
                        <td>{{ $patient->section->name }}</td>
                       
                        <td></td><td></td><td></td><td></td>
                        <td>
    
                            <a href="javascript:void(0);" wire:click="create_Conversation('{{$patient->email}}')" class="btn btn-primary btn-sum ">Message</a>
                        </td>
                    </tr>
                   
                 
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






