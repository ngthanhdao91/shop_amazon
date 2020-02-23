@extends('frontend.index_layout.index')
@section('title','Menu')
@section('content')
<script type="text/javascript">
	function updateCart(qty,rowId)
	{	
		// console.log(qty);
		// console.log(rowId);
		//alert(rowId);
		
		$.ajax({
			url: '{{ asset('cart/update') }}',
			type: 'GET',
			data: {qty:qty,rowId:rowId},
		})
		.done(function() {
			//toastr.success('Thông báo', {timeOut: 5000});
			location.reload();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			location.reload();
		});
		
	}
</script>
	<section class="ftco-section ftco-cart">
			<div class="container">
				@if(Cart::getContent()->count()>=1)
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">

	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Tên</th>
						        <th>Giá</th>
						        <th>Size</th>
						        <th>Số lượng</th>
						        <th>Đơn giá</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach($items as $item)
								      <tr class="text-center">
								        <td class="product-remove"><a href="{{ asset('/cart/delete/'.$item->id) }}"><span class="icon-close"></span></a></td>
								        
								        <td class="image-prod"><div class="img" style="background-image:url({{ asset("img/".$item->attributes->img)  }});"></div></td>
								        
								        <td class="product-name">
								        	<h3>{{ $item->name }}</h3>
								        	
								        </td>
								        
								        <td class="price">{{ number_format($item->price,0,",",".") }} đ</td>
								        <td class="product-size">
								        	<h3 style="text-transform: uppercase;">{{ $item->attributes->size }}</h3>
								        	
								        </td>
								        <td class="quantity">
								        	<div class="input-group mb-3">
							             	<input type="text" name="quantity" class="quantity form-control input-number text-center" value="{{ $item->quantity }}" min="1" max="100" onchange="updateCart(this.value,'{{ $item->id }}')">
							          	</div>
							          </td>
								        <td class="total">{{ number_format($item->price*$item->quantity,0,',','.') }} đ</td>
								      </tr><!-- END TR-->
								@endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
				<div class="col-md-9 ftco-animate">
					<form method="post" class="billing-form p-3 p-md-5" onsubmit="return checkForm(this);">
								<h3 class="mb-4 billing-heading">Thông tin khách hàng</h3>
			          	<div class="row align-items-end">
			          		<div class="col-md-12">
			                <div class="form-group">
			                	<label for="firstname">Họ tên</label>
			                  <input id="name" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" name="name" type="text" class="form-control" placeholder="Vui lòng nhập họ tên">
			                </div>
			              </div>
		                <div class="w-100"></div>

		                 	<div class="col-md-12">
				            	<div class="form-group">
			                	<label for="streetaddress">Địa chỉ</label>
			                  <input id="address" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" name="address" type="text" class="form-control" placeholder="Vui lòng nhập địa chỉ giao hàng">
			                </div>
				            </div>
				           
				           
				            <div class="w-100"></div>
				            <div class="col-md-6">
				            	<div class="form-group">
			                	<label for="towncity">Số điện thoại</label>
			                  <input id="phone" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" name="phone" type="number" class="form-control" placeholder="Vui lòng nhập SDT">
			                </div>
				            </div>
				            <div class="col-md-6">
				            	<div class="form-group">
				            		<label for="postcodezip">Email</label>
			                  <input id="email" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" name="email" type="email" class="form-control" placeholder="Vui lòng nhập email">
			                </div>
				            </div>
				            <div class="col-md-12">
			                <div class="form-group">
			                	<label for="phone">Ghi chú</label>
			                 	<textarea name="message" class="form-control" placeholder="Vui lòng nhập chú thích" rows="5"></textarea>
			                </div>
			              </div>
			              
		                
			            </div>
			          
          			</div>
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3 class="text-center">Tổng tiền</h3>
    					<p class="d-flex">
    						<span>Thành tiền</span>
    						<span>{{ number_format($total,0,',','.') }} đ</span>
    					</p>
    					<p class="d-flex">
    						<span>Giảm giá</span>
    						<span>0</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng</span>
    						<span>{{ number_format($total,0,',','.') }} đ</span>
    					</p>
    				</div>
    				<div class="cart-total mb-3">
			          		<div class="mb-3">
			          			<h3 class="billing-heading mb-4 text-center">Phương thức thanh toán</h3>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
										   <label><input checked="" type="radio" name="check" class="mr-2">Thanh toán khi nhận</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="radio">
										   <label><input disabled type="radio" name="check" class="mr-2">Chuyển khoản</label>
										</div>
									</div>
								</div>
							</div>
			          	</div>
    				<button  class="btn btn-primary py-3 px-5">Thanh toán</button></p>
    			</div>
    		</div>
    		{{ csrf_field() }}
    		</form><!-- END -->
    		@else
    			<h3 class="mb-4 billing-heading">Giõ hàng rỗng</h3>
    		@endif
			</div>
		</section>
@section('script')
	<script>
		document.getElementById("name").setCustomValidity("Vui lòng nhập Họ tên");
	  	document.getElementById("address").setCustomValidity("Vui lòng nhập Địa chỉ giao hàng");
	  	document.getElementById("phone").setCustomValidity("Vui lòng nhập Số điện thoại");
 		document.getElementById("email").setCustomValidity("Vui lòng nhập Email");
	</script>
@endsection
@stop