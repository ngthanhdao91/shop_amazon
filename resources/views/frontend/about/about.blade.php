@extends('frontend.index_layout.index')
@section('title','About')
@section('content')

	<section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Giới thiệu</span>
	          <h2 class="mb-4">Trà sữa Ngon Ngon</h2>
	        </div>
	        <div>
	  				<p>Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây. Giới thiệu ở đây</p>
	  			</div>
  			</div>
    	</div>
    </section>

     @include("frontend.index_layout.customers_say")

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4">Menu</h2>
	            <p class="mb-4">Description o day. Description o day.. Description o day.. Description o day.</p>
	            <p><a href="{{ asset('/menu') }}" class="btn btn-primary btn-outline-primary px-4 py-3">Xem Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					@foreach($product_random as $items)
	    					<div class="col-md-6">
	    						<div class="menu-entry">
			    					<a href="#" class="img" style="background-image: url({{ asset('img/'.$items->prod_img) }});"></a>
			    				</div>
	    					</div>
    					@endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @include("frontend.index_layout.sales")

@stop