 @extends('frontend.index_layout.index')
 @section('title','Trang chủ')
 @section('content')
    
    
    @include('frontend.index_layout.services')
    <!-- END index services -->
    
    @include('frontend.index_layout.gallery')
    <!-- END index gallery -->
    
    @include('frontend.index_layout.menu')
    <!-- END index menu -->

    @include('frontend.index_layout.best_sellers')
    <!-- END best_sellers -->

    {{-- @include('frontend.index_layout.about') --}}
    <!-- END about -->

   


    {{-- <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4">Our Menu</h2>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> --}}

     @include('frontend.index_layout.sales')
    <!-- END  sales -->
      
    
    
   

	@include('frontend.index_layout.customers_say')
    <!-- END index customers_say -->
  
   @include('frontend.index_layout.blog')
    <!-- END index blog -->

    @include('frontend.index_layout.map')
    <!-- END index map -->
@stop