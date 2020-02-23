 <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Trà sữa Ngon Ngon</h2>
              <p>Được phục vụ các bạn là niềm hạnh phúc của chúng tôi. Hãy cùng chúng tôi thưởng thức những ly trà sữa ngon nhất nào.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="">Phản hồi của khách hàng</h2>

              <!-- contact -->
              <div class="col-md-12 ftco-animate">
                <form method="post" class="contact-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="name" id="name" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" type="text" class="form-control" placeholder="Nhập tên">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="email" id="email" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" type="email" class="form-control" placeholder="Email">
                      </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <textarea  id="description" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" required="" name="description" cols="30" rows="4"  class="form-control" placeholder="Lời góp ý"></textarea>
                  </div>
                  <div class="form-group">
                      <input type="submit" value="Gữi" class="btn btn-primary py-3 px-5">
                  </div>
                  {{ csrf_field() }}
                </form>
              </div>
               <!-- end contact -->

            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Địa chỉ quán</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">130 Nguyễn Đình Chiểu, Khu phố 6, Phường Phước Hiệp, Tp Bà Rịa.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0932 032 251</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ngthanhdao91@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Dao Nguyen</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    @section('script')
  <script>
      document.getElementById("name").setCustomValidity("Vui lòng nhập Họ tên");
      document.getElementById("email").setCustomValidity("Vui lòng nhập Email");
      document.getElementById("description").setCustomValidity("Vui lòng nhập ý kiến góp ý");
  </script>
@endsection