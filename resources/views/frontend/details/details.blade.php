@extends('frontend.index_layout.index')
@section('title','Menu')
@section('content')

	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-4 mb-5 ftco-animate">
    				<a href="{{ asset("img/".$product->prod_img) }}" class="image-popup"><img src="{{ asset("img/".$product->prod_img) }}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-8 product-details pl-md-5 ftco-animate">
    				<h3>{{ $product->prod_name }}</h3>
    				<p class="price"><span>Thông tin</span></p>
    					<table class="table table-bordered table-dark">
					  		<thead>
					    		<tr>
							      <th scope="col">Size</th>
							      <th scope="col">Giá tiền</th>
							      <th scope="col">Lượng đường (g)</th>
							      <th scope="col">Caffeine</th>
							      <th scope="col">Calories</th>
					    		</tr>
					  		</thead>
					  		<tbody>
							     <tr>
							      <th scope="row">M</th>
							      <th scope="row">{{ number_format($product->prod_price,0,",",".") }} đ</th>
							       <th scope="row">{{ $product->prod_sugar }} </th>
							      <th scope="row"> @if($product->prod_caffeine==0) {{$product->prod_caffeine}} @else {{$product->prod_caffeine+3}} @endif </th>
							      <th  scope="row">{{ $product->prod_calories }}</th>
							    </tr>
							    <tr>
							      <th scope="row">L</th>
							      <th scope="row">{{ number_format($product->prod_price+10000,0,",",".") }} đ</th>
							       <th scope="row">{{ $product->prod_sugar+15 }}</th>
							      <th scope="row">{{ $product->prod_caffeine }}</th>
							      <th  scope="row">{{ $product->prod_calories }}</th>
							    </tr>
							    
							  </tbody>
					</table>
    				<p>{!! $product->prod_description !!}</p>
    				<p style="color:#f8b500;font-size: 14px;">(*) Thông tin dinh dưỡng chỉ mang tính chất tham khảo.</p>
					<form method="post">
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="size" id="" class="form-control">
	                  	<option value="m">Size M</option>
	                    <option value="l">Size L</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="icon-minus"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="icon-plus"></i>
	                 </button>
	             	</span>
	          	</div>
          	</div>
          	<p>

				    {{-- <a href="" class="btn btn-primary py-3 px-5">Add to Cart</a> --}}
					<button class="btn btn-primary py-3 px-5">Thanh toán</button>
          		{{ csrf_field() }}
          	</p>
          	</form>
    			</div>
    		</div>
    	</div>
    </section>
@section('script')
  <script type="text/javascript">
		$(document).ready(function(){
			//alert('ok');
		var quantitiy=1;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>1){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
@endsection
@stop