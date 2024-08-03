@extends('dashboard.layouts.master')
@section('css')

<!--  Owl-carousel css-->
<link href="{{URL::asset('dashboard/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">


@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back {{Auth::user()->name}}</h2>
						 <br>  <div class="row">
              <div class="card" style="width: 18rem;">
             <div class="card-body">
             <h5 class="card-title">{{$sections }} 
               <i class="fas fa-address-card"></i></h5>  
               <p class="card-text"></p><br>
               <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
               <div class="progress-bar bg-danger" style="width: 50%"></div>
               </div>
             </div></div>&ensp;&ensp;&ensp;&ensp;&ensp;
              <div class="card" style="width: 18rem;">
             <div class="card-body">
             <h5 class="card-title">{{$articl}} 
               <i class="fas fa-address-card"></i></h5>  
               <p class="card-text"> </p><br>
               <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 50%"></div>
               </div>
             </div></div>&ensp;&ensp;&ensp;&ensp;&ensp;
              <div class="card" style="width: 18rem;">
             <div class="card-body">
             <h5 class="card-title">{{$doctors }} doctors are available to help you
               <i class="fas fa-address-card"></i></h5>  
               <p class="card-text">   </p>
               <a href="/Doctors/list"  class="btn btn-primary btn-sum ">Start the conversation now</a>
               
               </div></div>
             </div></div>
            </div>
          </div>
             
				<!-- /breadcrumb -->
@endsection
@section('content')

       
 
  

<br>
<div class="row">
	@foreach ($articles as $article )
    <div class="card" style="width: 18rem;">
      <img src="{{asset('storage/'.$article->image) }}"class="card-img-top" alt="...">
   <div class="card-body">
   <h5 class="card-title">{{ $article->title}}</h5>  
     <p class="card-text">{{ $article->body }}</p>
     <div class="read-outer">
        <a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
    </div>
</div>
   </div>
 </div>&ensp;&ensp;&ensp;&ensp;&ensp; @endforeach
@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('dashboard/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('dashboard/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('dashboard/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('dashboard/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('dashboard/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('dashboard/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('dashboard/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('dashboard/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('dashboard/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('dashboard/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('dashboard/js/index.js')}}"></script>
<script src="{{URL::asset('dashboard/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection