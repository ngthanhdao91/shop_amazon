<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ asset('/') }}">Trà sữa<small>Ngon Ngon</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ asset('/') }}" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item"><a href="{{ asset('/menu') }}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{ asset('/service') }}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{ asset('/tintuc') }}" class="nav-link">Tin tức & Ưu đãi</a></li>
	          <li class="nav-item"><a href="{{ asset('/thongtin') }}" class="nav-link">Về chúng tôi</a></li>
	          {{-- <li class="nav-item"><a href="{{ asset('/lienhe') }}" class="nav-link">Liên hệ</a></li> --}}
	          <li class="nav-item cart"><a href="{{ asset('/cart/show') }}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>{{ Cart::getContent()->count()}}</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>