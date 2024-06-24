<div>
    @if(session()->has('message'))
    <div class="alert alertdismissablr alert-success">
        
        {{ session('message') }}
          
        &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span> </button>
          
          
         </div>@endif
         @if(session()->has('message_error'))
         <div class="alert alertdismissablr alert-success">
             
             {{ session('message_error') }}
               
             &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
             <button type="button" class="close" data-dismiss="alert" aria-label="close">
                 <span aria-hidden="true">&times;</span> </button>
               
               
              </div>@endif
    <div class="row center">
    <form wire:submit.prevent="booking">
    
    
    
    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
        <label for="day">day</label>
        <select class="form-select" name="day" wire:model="day_id" id="day">
            <option>Select a day</option>
            @foreach ( $days as  $day )
            <option value="{{$day->id}}" >{{$day->day}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-field col s3">
        <input type="text" class="timepicker" wire:model="from" name="form" placeholder="form">
    </div>
    <div class="input-field col s2">
        <input type="text" class="timepicker"  wire:model="to" name="to" placeholder="to">
    </div>
    <div class="input-field col s1">
        <input type="number"  wire:model="step" name="step" placeholder="step">
    </div>
    <div class="input-field col s3">
        <p>
            <label>
        <input   name="off" wire:model="off" class="filled-in" type="checkbox" @checked(true)>
   <span>off</span>
            </label>
        </p>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
            <span class="txt">save</span></button>
        </div>
    </form>
   

</div>
