<div class="modal fade" id="create_doctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>

               <div class="modal-body">
             
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
                                            {{-- <div class="form-group">
                                                <label for="section">section</label>
                                                <select name="section" class="form-control">
                                                    <option></option>
                                                    @foreach ($sections as $section )
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>  
                                                    @endforeach
                                                </select>
                                                @error('section')<span class="text-danger">{{ $message }}</span>   
                                                @enderror
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="image">image</label>
                                                <input type="file" name="image" class="custom-file" wire:model="image" rows="5"></textarea>
                                                    @error('image')<span class="text-danger">{{ $message }}</span>   
                                                    @enderror
                                            </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="button" wire:click="save_doctor" class="btn btn-danger">Add</button>
               </div>
       </div>
   </div>
</div>