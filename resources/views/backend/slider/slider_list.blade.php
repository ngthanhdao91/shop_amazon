
@extends('backend.index_layout.index')
@section('title','Product List')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
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

                        @foreach($slider as $slid)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $slid->id }}</td>
                            <td>{{ $slid->slid_title }}</td>
                            <td><img style="height:70px" src="{{ asset('img/'.$slid->slid_img) }}" alt=""></td>
                           
                            <td> @if($slid->slid_status==1) Hiện @else Ẩn @endif  </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ asset('admin/slider/delete/'.$slid->id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ asset('admin/slider/edit/'.$slid->id) }}">Edit</a></td>
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
   
   