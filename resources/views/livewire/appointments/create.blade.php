
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
							
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Full Name</label>
<input type="text" name="username" wire:model="name" placeholder="Full Name" required="">
<span class="icon fa fa-user"></span>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Age</label>
<input type="text" name="age" wire:model="age" placeholder="Enter Your Age" required="">
<span class="icon fa fa-calendar"></span>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Gender</label>
<select class="custom-select-box" name="Gende" wire:model="Gende"  id="Gende">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>
</div>  
								
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Email</label>
<input type="email" name="email"   wire:model="email"placeholder="email" required="">
<span class="icon fas fa-envelope"></span>
</div>
	

								
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
	<label for="section">Section</label>
	<select class="form-select" name="section" wire:model="section_id" wire:change="reloadDoctors" id="section">
		<option>Select a Section</option>
		@foreach($sections as $section)
		<option value="{{$section->id}}" >{{$section->name}}</option>
		@endforeach
	</select>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 form-group">
	<label for="doctor">Doctor</label>
	<select name="doctor" wire:model="doctor_id" class="form-select"   wire:change="reloadAppointment" id="doctor" required>
		<option selected>Select a Doctor</option>
		@foreach($doctors as $id => $name)
			<option value="{{$id}}" wire:key="doctor-{{ $id }}">{{$name}}</option>
		@endforeach
	</select>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
	<label for="appointments">Appointment</label>
	<select name="appointments" wire:model="appointment" class="form-select"  wire:change="reloadTime" id="appointment" required>
		<option selected>Select  an Appointment</option>
		@foreach($appointments as $id => $day_id)
			<option value="{{$id}}" wire:key="appointments-{{ $id }}">{{$day_id}}</option>
		@endforeach
	</select>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
	<label for="time">time</label>
	<select name="time" wire:model="time" class="form-select" id="time" required>
		<option selected>Select a time </option>
		@foreach($times as $id => $from)
			<option value="{{$from}}" wire:key="time-{{ $from }}">{{$from}}</option>
		@endforeach
	</select>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<button class="theme-btn btn-style-two" type="submit" name="submit-form">
	<span class="txt">save</span></button>
</div>
								
</div>
</form>
</div>
					
</div>
</div>
	
</div>
</form>
</div>
