@extends('backend.index_layout.index')
@section('title','Slider Add')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Comment
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input  required="" type="text" class="form-control" name="name" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Job</label>
                        <input required="" type="text" class="form-control" name="job" placeholder="Please Enter Job" />
                    </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea required="" class="form-control ckeditor" rows="3" name="description"></textarea>
                        @include('ckfinder::setup')
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input name="stauts" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="stauts" value="0" type="radio">Invisible
                        </label>
                    </div>
                    <button id="product_add" type="submit" class="btn btn-default">Comment Add</button>
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


