<div>
   <div class="row justify-content-center">
      <div class="col-12">
   <div class="card">
      <div class="card-header ">
          <b>posts</b>
         &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp;
          <a href="btn btn-primary pull-right" wire:click="create-section" class="btn btn-primary btn-sum ">Add Section</a>

      </div>
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
   <div class="table-responsive">
           <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
           <thead>
               <tr>
                   <th></th>
                   <th>Name</th>
                   <th>Doctord</th>
                   <th>تاريخ افتتاح</th>
               </tr>
           </thead>
           <tbody>
               {{-- @foreach ($groups as $group) --}}
                   <tr>
                       <td>jjjj</td>
                       <td>;llll</td>
                       <td>mmm</td>
                       <td>ddd</td>
                       <td>
                           <button  class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" ><i class="fa fa-trash"></i></button>
                       </td>
                   </tr>
                 {{-- @include('livewire.GroupServices.delete') --}}
               {{-- @endforeach --}}
       </table>
   
   </div>
   
   
   
   
</div>
