
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
<input type="text" name="age"wire:model="age" placeholder="Enter Your Age" required="">
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
<label>Phone Number</label>
<input type="tel" name="phone"   wire:model="phone"placeholder="Phone No" required="">
<span class="icon fas fa-phone"></span>
</div>
	
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Appointment Date</label>
<input type="date" name="appointment"  wire:model="appointment" placeholder="Set A Date" required class="form-control">

</div>
		
<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<label>Consultant Hour</label>
<input type="time" name="time" wire:model="time" placeholder="Select Time"  required class="form-control">

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
	<select name="doctor" wire:model="doctor_id" class="form-select" id="doctor" required>
		<option selected>Select a Doctor</option>
		@foreach($doctors as $id => $name)
			<option value="{{$id}}" wire:key="doctor-{{ $id }}">{{$name}}</option>
		@endforeach
	</select>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 form-group">
<button class="theme-btn btn-style-two" type="submit" name="submit-form">
	<span class="txt">ADD</span></button>
</div>
								
</div>
</form>
</div>
					
</div>
</div>
	
</div>
</form>
</div>
