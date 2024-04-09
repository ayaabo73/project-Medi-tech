<div>
    <div class="row justify-content-center">
        <div class="col-12">
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
       <div class="card-header ">
            <b>Doctors</b>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
        <a href="javascript:void(0);" wire:click="return_to_addDoctor" class="btn btn-primary btn-sum ">X</a>
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
             <form wire:submit="update" enctype="mulipart/form-data">
             
                    <div class="form-group">
                       <label for="name">name</label>
                           <input type="text" name="name" wire:model="name" class="form-control">
                           @error('name')<span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                   
                           <div class="form-group">
                               <label for="email">email</label>
                                   <input type="text" name="email" wire:model="email"  class="form-control">       
                                     @error('email')<span class="text-danger">{{ $message }}</span> 
                                   @enderror
                               </div>
                                   <div class="form-group">
                                       <label for="phone">phone</label>
                                       <input type="text"  name="phone" class="form-control" wire:model="phone" rows="5"></textarea>
                                           @error('phone')<span class="text-danger">{{ $message }}</span>   
                                           @enderror
                                       </div>
                                       <div class="form-group">
                                        <label for="location">location</label>
                                        <input type="text"  name="location" class="form-control" wire:model="location" rows="5"></textarea>
                                            @error('location')<span class="text-danger">{{ $message }}</span>   
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="text"  name="password" class="form-control" wire:model="password" rows="5"></textarea>
                                                @error('password')<span class="text-danger">{{ $message }}</span>   
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="section">section</label>
                                                <select name="section" wire:model="section" class="form-control">
                                                    <option></option>
                                                    @foreach ($sections as $section )
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>  
                                                    @endforeach
                                                </select>
                                                @error('section')<span class="text-danger">{{ $message }}</span>   
                                                @enderror
                                            </div>
                                            @if($this->image_original !='')
                                            <img src="{{asset('storage/photos/'.$this->image_original) }}" width="100">
                                            @endif
                                            <div class="form-group">
                                                <label for="image">image</label>
                                                <input type="file" name="image" class="custom-file" wire:model="image">
                                                    @error('image')<span class="text-danger">{{ $message }}</span>   
                                                    @enderror
                                                   
                                            </div>
               </div>
               <div class="modal-footer">
                  <input type="submit" name="save" value="Update" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
       </div>
   </div>
</div>