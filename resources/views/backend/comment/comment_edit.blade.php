@extends('backend.index_layout.index')
@section('title','Slider Add')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider - 
                    <small>{{ $comment->com_name }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{ $comment->com_name}}" type="text" class="form-control" name="name" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Job</label>
                        <input value="{{ $comment->com_job}}" type="text" class="form-control" name="job" placeholder="Please Enter Job" />
                    </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea required="" oninvalid="this.setCustomValidity('Input please!!!')" class="form-control ckeditor" rows="3" name="description">{{ $comment->com_description }}</textarea>
                        @include('ckfinder::setup')
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input  @if($comment->com_stauts==1) checked="" @endif   name="stauts" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input @if($comment->com_stauts==0) checked="" @endif  name="stauts" value="0" type="radio">Invisible
                        </label>
                    </div>
                    <button id="product_add" type="submit" class="btn btn-default">Comment Edit</button>
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


