@extends('dashboard.layouts.master')
@section('css')

<!--  Owl-carousel css-->
<link href="{{URL::asset('dashboard/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
{{-- <img src="/images/patient/home.GIF" width="2000" height="700"> --}}

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Health Articles</h2>
						  
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