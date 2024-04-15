<div>
    <div class="row justify-content-center">
        <div class="col-12">
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
       <div class="card-header ">
            <b>Doctors</b>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
        <a href="javascript:void(0);" wire:click="return_to_addSection" class="btn btn-primary btn-sum ">X</a>
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
                     <form wire:submit="update_section" >
             
                     <div class="form-group">
                         <label for="name">name</label>
                           <input type="text" name="name" wire:model="name" class="form-control">
                           @error('name')<span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       
                   
                      @foreach ($doctors as $doctor)
                      <div class="form-group">
                                <img src="{{asset('storage/'.$doctor->image) }}" width="270px" hight="370px"/>

           
                                <h5><a href="#">{{ $doctor->name }}</a></h5>
                                <h5><a href="javascript:void(0);" data-toggle="modal" data-target="#delete_doctor{{$doctor->id}}">Delet</a></h5>
                                @endforeach
                            </div>

                        </div>   
               <div class="modal-footer">
                  <input type="submit" name="update_section" value="update" class="btn btn-primary">
            </div>
          
            @include('livewire.admin.delete_doctor')
            </form>
        </div>
    </div>
</div>
       </div>
   </div>
</div>