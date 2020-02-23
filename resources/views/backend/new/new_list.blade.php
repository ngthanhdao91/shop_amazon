@extends('backend.index_layout.index')
@section('title','New List')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($new as $new)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $new->new_id }}</td>
                            <td>{{ $new->new_title}}</td>
                            <td><img style="height:70px" src="{{ asset('img/'.$new->new_img) }}" alt=""></td>   
                            <td> @if($new->new_status==1) Hiện @else Ẩn @endif  </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ asset('admin/new/delete/'.$new->new_id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ asset('admin/new/edit/'.$new->new_id) }}">Edit</a></td>
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
   
   