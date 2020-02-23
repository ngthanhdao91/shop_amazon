@extends('backend.index_layout.index')
@section('title','Product List')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comment
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Stauts</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($comment as $com)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $com->com_id }}</td>
                            <td>{{ $com->com_name }}</td>
                            <td>{{ $com->com_job }}</td>
                           
                            <td> @if($com->com_status==1) Hiện @else Ẩn @endif  </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ asset('admin/comment/delete/'.$com->com_id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ asset('admin/comment/edit/'.$com->com_id) }}">Edit</a></td>
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
   
   