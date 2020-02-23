<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-3" style="padding-top: 3em">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">News - Events</span>
            <h2 class="mb-4">Tin tức - Sự kiện</h2>
            {{--  --}}
          </div>
        </div>
        <div class="row d-flex">

          @foreach($new as $new)
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('img/'.$new->new_img) }}');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">{{ $new->updated_at->format('d-m-Y')  }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">{{ $new->new_title }}</a></h3>
                <p>{!! \Illuminate\Support\Str::words($new->new_summary, 20 ,'...')  !!}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>