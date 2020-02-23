@extends('frontend.index_layout.index')
@section('title','Tin tức khuyến mãi')
@section('content')
	@csrf
	 <section class="ftco-section"  >
	 	<div class="container" id="table-data">
        	@include('frontend.news.pagination')
      	</div>
    </section>
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		//alert('ok');
		$(document).on('click', '.page-link1', function(event){
		    event.preventDefault(); 
		    var page = $(this).attr('href').split('page=')[1];
		    fetch_data(page);
		 });
		
		function fetch_data(page)
		 {
		  var _token = $("input[name=_token]").val();
		  $.ajax({
		      url:"{{ route('pagination.getPagination') }}",
		      method:"POST",
		      data:{_token:_token, page:page},
		      success:function(data)
		      {
		       	$('#table-data').html(data);
		       //alert('ok');
		      },
		      error: function ( msg) {
			    console.log(msg);
			  }
		    });
		 }
	});
</script>
	
@endsection
@stop