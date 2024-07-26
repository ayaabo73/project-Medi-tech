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
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back doctor {{Auth::user()->name}}</h2>
						  <p class="mg-b-0">what do we have today?</p>
						</div>
					
					
				<!-- /breadcrumb -->
@endsection
@section('content')
<br>
<div class="card mb-3" style="max-width: 540px;">
	<div class="row g-0">
	  <div class="col-md-4">
		<img src="{{asset('storage/'.$doctor->image) }}"  class="img-fluid rounded-start" >
	  </div>
	  <div class="col-md-8">
		<div class="card-body">
		  <h5 class="card-title">{{ $doctor->name }}</h5>
		  <p class="card-text">{{ $doctor->email }}</p>
		  <p class="card-text">{{ $doctor->section->name }}</p>
		  <p class="card-text">{{ $doctor->phone }}</p>
		  <p class="card-text">{{ $doctor->location }}</p>
		  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		  
		</div>
	  </div>
	</div>
  </div><br><br>
<div class="row">
	<div class="card" style="width: 18rem;">
   <div class="card-body">
   <h5 class="card-title">Patient &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	   <i class="fas fa-address-card"></i></h5>  
	 <p class="card-text">{{$patient }}</p>
	 <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
	   <div class="progress-bar bg-danger" style="width: 50%"></div>
	 </div>
   </div>
 </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
 <div class="card" style="width: 18rem;">
   <div class="card-body">
	 <h5 class="card-title">Sections&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	   <i class="fas fa-hospital"></i></h5>  
	 <p class="card-text">{{ $sections}}</p>
	 <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
	   <div class="progress-bar bg-info" style="width: 75%"></div>
	 </div>
   </div>
 </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
 <div class="card" style="width: 18rem;">
   <div class="card-body">
	 <h5 class="card-title">Article&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	   <i class="fas fa-file-alt"></i></h5>  
	 <p class="card-text">{{ $articles}}</p>
 <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
   <div class="progress-bar bg-warning" style="width: 30%"></div>
 </div>
   </div>
 </div>
 
 

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