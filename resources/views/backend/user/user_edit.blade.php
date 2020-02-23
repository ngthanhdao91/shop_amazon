@extends('backend.index_layout.index')
@section('title','User Setting')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User - 
                    <small>{{ $user->email }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <div id="ajax"></div>
                <form>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{ $user->email }}" class="form-control" name="name" placeholder="Please Enter Email" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Old Password</label>
                        <input id="oldpass" required="" type="password" value="" class="form-control" name="oldpass" placeholder="Please Enter password" />
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input id="newpass" required=""  type="password" value="" class="form-control" name="newpass" placeholder="Please Enter password" />
                    </div>
                    <div class="form-group">
                        <label>Re Password</label>
                        <input id="repass" required="" type="password" value="" class="form-control" name="repass" placeholder="Please Enter repass" />
                    </div>
                   
                    <button id='btn_submit' class="btn btn-default">Change password</button>
                    {{ csrf_field() }}
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@section('script')
<script type="text/javascript">
    

     $(document).ready(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('#btn_submit').click(function (e) {
            e.preventDefault();
            oldpass=$('#oldpass').val();
            newpass=$('#newpass').val();
            repass=$('#repass').val();
            //alert(renewpass);
            if(newpass==repass)
            {
                $.ajax({
                    url: '{{ asset('admin/user/testpassold') }}',
                    type: 'GET',
                    data: {oldpass: oldpass,newpass:newpass},
                    success:function(data)
                    {
                        //alert(data.success);
                        if(data.success==true)
                        {
                            window.location="{{ asset('admin/home/') }}";
                        }
                        else
                        {
                            $('#ajax').html(
                                '<p class="alert alert-danger">'+data.success+'</p>');
                        }
                        
                    }
                });
            }
            else
            {
                $('#ajax').html('<p class="alert alert-danger">New password and repeat password is false.</p>');
            }
            
        });
        
    });
</script>
@endsection
@stop
