 <section class="home-slider owl-carousel">
      
      @foreach($slider as $slid)
      <div class="slider-item" style="background-image: url( {{ asset('img/'.$slid->slid_img)  }});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
              <h1 class="mb-4">{{ $slid->slid_title }}</h1>
              <p class="mb-4 mb-md-5">{!! $slid->slid_description  !!}</p>
             {{--  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p> --}}
            </div>

          </div>
        </div>
      </div>
      @endforeach
      
    </section>