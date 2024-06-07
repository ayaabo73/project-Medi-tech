<div class="modal fade" id="approval{{ $appointment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">تاكيد موعد المريض</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <form wire:submit="approval">
                   @method('PUT')
                   @csrf
                   <input type="hidden" name="id" value="{{ $appointment->id }}">
                   <p class="mg-b-20">{{$appointment->name}}</p>
                   <!--div-->
                   <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                       <div class="card">
                           <div class="card-body">
                                   <div class="input-group col-md-12">
                                           <div class="input-group-text">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                </div>
                                           
                                       </div>
                                       
                                        <label for="appointment"></label>
                                          <input type="txet" name="appointment" wire:model="appointment" class="form-control" value="{{date('Y-m-d H:i')}}">
                                          @error('name')<span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                
                                 
                           </div>
                       </div>
                   </div>

                   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                    <input type="submit" name="approval" value="save" class="btn btn-primary">
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
