<section class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Menu</span>
            <h2 class="mb-4">Trà sữa ngon ngon</h2>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<?php $count_cate=1; ?> 
						@foreach($category as $cate)
		              <a class="nav-link @if($count_cate==1) active @endif" id="v-pills-{{ $count_cate }}-tab" data-toggle="pill" href="#v-pills-{{ $count_cate }}" role="tab" aria-controls="v-pills-{{ $count_cate }}" aria-selected="@if($count_cate==1) true @else false @endif">{{ $cate->cate_name }}</a>
						<?php $count_cate+=1; ?> 
						@endforeach
						
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="col-md-12 tab-content ftco-animate" id="v-pills-tabContent">

					<?php $count_cate=1; ?> 	
					@foreach($category as $cate)
		              <div class="tab-pane fade show @if($count_cate==1) active @endif" id="v-pills-{{ $count_cate }}" role="tabpanel" aria-labelledby="v-pills-{{ $count_cate }}-tab">
		              	<div class="row">
							
							@foreach($product as $prod)
								@if($prod->prod_cate==$cate->cate_id)
									
				              		<div class="col-md-2 text-center">
				              			<div class="menu-wrap">
				              				<a href="{{ asset('menu/'.$prod->prod_slug.'/'.$prod->prod_id) }}" class="menu-img img mb-4" style=" height:130px;background-image: url({{ asset('img/'.$prod->prod_img) }});"></a>
				              				<div class="text">
				              					<h3 style="height: 80px"><a href="{{ asset('menu/'.$prod->prod_slug.'/'.$prod->prod_id) }}">{{ $prod->prod_name }}</a></h3>
				              					{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p> --}}
				              					<p class="price"><span style="color: gray;">{{ number_format($prod->prod_price,'0',',','.') }} VND</span></p>
				              					<p><a href="{{ asset('menu/'.$prod->prod_slug.'/'.$prod->prod_id) }}" class="btn btn-primary btn-outline-primary">Mua ngay</a></p>
				              				</div>
				              			</div>
				              		</div>
			              		@endif
		              		@endforeach

		              	</div>
		              </div>
		              <?php $count_cate+=1; ?> 
		             @endforeach

		              

		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>