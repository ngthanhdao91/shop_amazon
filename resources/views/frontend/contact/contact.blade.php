@extends('frontend.index_layout.index')
@section('title','Contact')
@section('content')
	
	<section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Contact Information</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Địa chỉ:</span> 
				132 Nguyễn Đình Chiểu, Khu phố 6, Phường Phước Hiệp, Tp Bà Rịa ( Đằng sau trường cấp 3 Châu Thành )</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920">0932-032-251 hoặc 0934-182-932</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@trasuangonngon.com">info@trasuangonngon.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website:</span> <a href="#">trasuangon.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form method="post" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input   required="" type="text" class="form-control" placeholder="Nhập tên ">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input required="" type="mail" class="form-control" placeholder="Nhập Email">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
              @csrf
            </form>
          </div>
        </div>
      </div>
    </section>
    {{-- map --}}
    @include("frontend.index_layout.map")

@stop