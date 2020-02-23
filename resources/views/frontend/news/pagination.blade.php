
        <div class="row d-flex">
      @foreach($news as $item)
            <div class="col-md-4 d-flex ">
              <div class="blog-entry align-self-stretch">
                <a href="{{ asset('tintuc/details/'.$item->new_id) }}" class="block-20" style="background-image: url('{{ asset('img/'.$item->new_img)  }}');">
                </a>
                <div class="text py-4 d-block">
                  <div class="meta">
                    <div><a href="{{ asset('tintuc/details/'.$item->new_id) }}">{{ $item->updated_at->format('d-m-Y')  }}</a></div>
                    <div><a href="{{ asset('tintuc/details/'.$item->new_id) }}">Admin</a></div>
                    <div><a href="{{ asset('tintuc/details/'.$item->new_id) }}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading mt-2"><a href="{{ asset('tintuc/details/'.$item->new_id) }}">{{ $item->new_title }}</a></h3>
                  <p>{!! \Illuminate\Support\Str::words($item->new_summary, 30 ,'...')  !!}</p>
                </div>
              </div>
            </div>
            @endforeach

        </div>

        <div class="row">
          
          <div class="col text-center">
            <div class="block-27">
              {{ $news->links() }}
              {{-- <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul> --}}
            </div>
          </div>
        </div>
   
