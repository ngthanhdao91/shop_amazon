@extends('backend.index_layout.index')
@section('title','Category Edit')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category - 
                    <small>{{ $category->cate_name }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <form action="" method="POST">
                    
                    <div class="form-group">
                        <label>Category Name</label>
                        <input value="{{ $category->cate_name }}" class="form-control" name="name" placeholder="Please Enter Category Name" />
                    </div>
                   
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    {{ csrf_field() }}
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop
