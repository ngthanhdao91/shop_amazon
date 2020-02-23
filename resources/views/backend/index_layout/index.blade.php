<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title> @yield('title') </title>
    
    <!-- khai bao duong dan mac dinh  -->
    <base href="{{ asset('backend') }}/">
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        
        <!-- header  -->
        @include('backend.index_layout.header')

         <!-- do du lieu content -->
        @yield('content')       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
         //dinh dang lai Price in Product
        $('#element').priceFormat({
            prefix: '',
            suffix: ' VND'
        });
        //dinh dang lai Price in Product
        $("#product_add").click(function() {
            data=$('#element').unmask();
            config_price=data.replace('00','');
            $('#price_hide').val(config_price);
        });
        //img in product
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
    //img in product
    function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    // JavaScript

    </script>
    <!--chen soan thảo văn bản-->
    <script type="text/javascript" language="javascript" src="ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" language="javascript" src="ckfinder/ckfinder.js" ></script>
    <script src="js/jquery.priceformat.min.js"></script>
    <script type="text/javascript">  
       CKEDITOR.replace( 'editor1' );  
    </script> 
    <!-- do du lieu cho cac section script -->
    @yield('script')       
</body>

</html>
