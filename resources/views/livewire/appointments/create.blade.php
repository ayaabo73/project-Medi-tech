
<div>
    @if(session()->has('message'))
    <div class="alert alertdismissablr alert-success">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
       <span aria-hidden="true">&times;</span> </button>
         </div>
        @endif
<form wire:submit.prevent="store">
<div class="row clearfix">
    
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
        
        <input type="text" name="username" wire:model="name" placeholder="name" required="">
        <span class="icon fa fa-user"></span>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
        <input type="email" name="email" wire:model="email" placeholder="email"   required="">
        <span class="icon fa fa-envelope"></span>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
        <label for="section"></label>
        <select class="form-select" name="section" wire:model="section_id" wire:change="reloadDoctors" id="section">
            <option>Select a Section</option>
            @foreach($sections as $section)
                <option value="{{$section->id}}" >{{$section->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
        <label for="doctor"></label>
        <select name="doctor" wire:model="doctor_id" class="form-select" id="doctor" required>
            <option selected>Select a Doctor</option>
            @foreach($doctors as $id => $name)
                <option value="{{$id}}" wire:key="doctor-{{ $id }}">{{$name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
        <input type="tel" name="phone" wire:model="phone" placeholder="phone" required="">
        <span class="icon fas fa-phone"></span>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <input type="date" name="appointment" wire:model="appointment" placeholder="appointment" required class="form-control">
       
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <textarea name="notes" wire:model="notes" placeholder="notes"></textarea>
        
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
            <span class="txt">ADD</span></button>
    </div>
</div>
</form>
</div>
