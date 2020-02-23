<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Hot</span>
            <h2 class="mb-4">Trà sữa bán chạy</h2>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>
        <div class="row">

            @foreach($product_best_seller as $prod)
        	<div class="col-md-2">
        		<div class="menu-entry">
    					<a href="#" class="img" style=" height:130px;background-image: url({{ asset('img/'.$prod->prod_img) }});"></a>
    					<div class="text text-center pt-4">
    						<h3  style="height: 80px"><a href="#">{{$prod->prod_name }}</a></h3>
    						<p class="price"><span style="color: gray;">{{ number_format($prod->prod_price,'0',',','.') }} VND</span></p>
    						<p><a href="{{ asset('menu/'.$prod->prod_slug.'/'.$prod->prod_id) }}" class="btn btn-primary btn-outline-primary">Mua ngay</a></p>
    					</div>
    				</div>
        	</div>
        	@endforeach

        </div>
    	</div>
    </section>