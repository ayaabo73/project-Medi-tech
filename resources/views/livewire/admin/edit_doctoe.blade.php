<div class="modal fade" id="delete_doctor{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">delete</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>

               <div class="modal-body">
                   <h5>Are you sure?</h5>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="button" wire:click="delete_doctor({{ $doctor->id }})" class="btn btn-danger">delete</button>
               </div>
       </div>
   </div>
</div>