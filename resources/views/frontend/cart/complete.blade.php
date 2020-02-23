@extends('frontend.index_layout.index')
@section('title','Menu')
@section('content')

<div class="col-md-12 contact-info ftco-animate" style="padding: 3em;">
	<div class="row">
		<div class="col-md-12">
		  <h2 class="h4">Quý khách đã đặt hàng thành công!</h2>
		</div>
		<div class="col-md-12">
		  <p> • Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
		  <p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
		<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
		<p>• Trụ sở chính: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
		<p>Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
		<p class="text-right return"><a href="{{ asset('/') }}">Quay lại trang chủ</a></p>
		</div>
	</div>
</div>
@stop