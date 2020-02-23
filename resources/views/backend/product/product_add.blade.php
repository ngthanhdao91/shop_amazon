@extends('backend.index_layout.index')
@section('title','Product Add')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors.note')
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control">

                            @foreach($category as $cate_item)
                                <option value="{{ $cate_item->cate_id }}">{{ $cate_item->cate_name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group" >
                        <label>Images</label>
                        <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" style="height: 200px" src="upload/images/new_seo-10-512.png">
                    </div>
                    <div class="form-group">    
                        <label>Price</label>
                        <input id="element" required="" type="text" class="form-control" name="element" placeholder="Please Enter Price"  />
                        <input name="price_hide" type="hidden" id="price_hide">
                    </div>
                     <div class="form-group">
                        <label>Temperature</label>
                        <label class="radio-inline">
                            <input name="temperature" value="1" checked="" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="temperature" value="0" type="radio">Không
                        </label>
                       
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input name="status" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="0" type="radio">Invisible
                        </label>
                    </div>
                     <div class="form-group">
                        <label>Sugar</label>
                        <input required=""  type="text" class="form-control" name="sugar" placeholder="Please Enter Sugar" />
                    </div>
                     <div class="form-group">
                        <label>Caffeine</label>
                        <input required=""  type="text" class="form-control" name="caffeine" placeholder="Please Enter Caffeine" />
                    </div>
                     <div class="form-group">
                        <label>Calories</label>
                        <input required=""  type="text" class="form-control" name="calories" placeholder="Please Enter Calories" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea required="" oninvalid="this.setCustomValidity('Input please!!!')" class="form-control ckeditor" rows="3" name="description"></textarea>
                        @include('ckfinder::setup')
                    <div class="form-group">
                        <label>Featured</label>
                        <label class="radio-inline">
                            <input name="featured" value="1" checked="" type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="featured" value="0" type="radio">Not Hot
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


