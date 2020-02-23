@extends('backend.index_layout.index')
@section('title','List Categories')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($category as $item_cate)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $item_cate->cate_id }}</td>
                            <td>{{ $item_cate->cate_name }}</td>
                            <td>{{ $item_cate->cate_slug }}</td>
                            <td>{{ $item_cate->created_at->format('d/m/Y') }}</td>
                            <td>{{ $item_cate->updated_at->format('d/m/Y')}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ asset('admin/category/delete/'.$item_cate->cate_id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ asset('admin/category/edit/'.$item_cate->cate_id) }}">Edit</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@stop

