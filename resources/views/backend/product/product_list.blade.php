
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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($product as $prod)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $prod->prod_id }}</td>
                            <td>{{ $prod->prod_name }}</td>
                            <td><img style="height:70px" src="{{ asset('img/'.$prod->prod_img) }}" alt=""></td>
                            <td>{{ number_format($prod->prod_price,0,',','.') }} VND</td>
                            <td> @if($prod->prod_stauts==1) Hiện @else Ẩn @endif  </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ asset('admin/product/delete/'.$prod->prod_id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ asset('admin/product/edit/'.$prod->prod_id) }}">Edit</a></td>
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
   
   