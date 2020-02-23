 <section class="ftco-section img" id="ftco-testimony" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5" style="padding-top: 3em">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Feedback</span>
	          <h2 class="mb-4">Phản hồi của khách hàng</h2>
	          {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">

	        @foreach($comment as $com)
	        <div class="col-lg align-self-sm-end ">
	          <div class="testimony" style="text-align: justify;">
	             <blockquote>
	                <p style="">{!! $com->com_description !!}</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_3.jpg" alt="">
	                </div>
	                <div class="name align-self-center">{{ $com->com_name }} <span class="position">{{ $com->com_job }}</span></div>
	              </div>
	          </div>
	        </div>
			@endforeach

	        

	      </div>
	    </div>
	  </section>