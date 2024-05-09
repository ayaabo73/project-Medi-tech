
<div>

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
        <label for="exampleFormControlSelect1"></label>
        <select class="form-select" name="section" wire:model="section" wire:change="updatedSection" id="exampleFormControlSelect1">
            <option>section</option>
            @foreach($sections as $section)
            <option value="{{$section->id}}" >{{$section->name}}</option>
        @endforeach
        
        </select>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
        <label for="exampleFormControlSelect1"></label>
        <select name="doctor" wire:model="doctor" class="form-select" id="exampleFormControlSelect1">
            <option>doctor</option>
            @foreach($doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
        <input type="tel" name="phone" wire:model="phone" placeholder="phone" required="">
        <span class="icon fas fa-phone"></span>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <textarea name="notes" wire:model="notes" placeholder="notes"></textarea>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
            <span class="txt">تاكيد</span></button>
    </div>
</div>
</form>
</div>
