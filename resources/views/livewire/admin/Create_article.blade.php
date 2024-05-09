<div>
    <div class="row justify-content-center">
        <div class="col-12">
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
       <div class="card-header ">
            <b>Articles</b>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
        <a href="javascript:void(0);" wire:click="return_to_addArticle" class="btn btn-primary btn-sum ">X</a>
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

             <form wire:submit="save">
             
                    <div class="form-group">
                       <label for="title">title</label>
                           <input type="text"  name="title" wire:model="title" class="form-control">
                           @error('title')<span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                   
                           <div class="form-group">
                               <label for="body">body</label>
                               <textarea  name="body" class="form-control"wire:model="body" rows="5"></textarea>
                                     @error('body')<span class="text-danger">{{ $message }}</span> 
                                   @enderror
                               </div>
                </div>
              <div class="modal-footer">
                  <input type="submit" name="save" value="Add" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
       </div>
   </div>
</div>