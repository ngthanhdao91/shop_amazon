@extends('backend.index_layout.index')
@section('title','Slider Add')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider - 
                    <small>{{ $slider->slid_title }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="{{ $slider->slid_title }}" type="text" class="form-control" name="title" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group" >
                        <label>Images</label>
                        <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" style="height: 200px" src="{{ asset('img/'.$slider->slid_img) }}">
                    </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea required="" oninvalid="this.setCustomValidity('Input please!!!')" class="form-control ckeditor" rows="3" name="description">{{ $slider->slid_description }}</textarea>
                        @include('ckfinder::setup')
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input  @if($slider->slid_status==1) checked="" @endif   name="status" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input @if($slider->slid_status==0) checked="" @endif  name="status" value="0" type="radio">Invisible
                        </label>
                    </div>
                    <button id="product_add" type="submit" class="btn btn-default">Product Add</button>
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


