<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Thông Tin Đại Lý
        </h1>
        <h2 class="page-header">
            <a href="{{route('agency.create')}}"><button class="btn-outline-primary btn-lg"> Thêm Mới </button> </a>
        </h2>
        <form method="get" action="{{route('agency.search')}}" class="form-inline my-2 my-lg-0">
            <input type="search" class="form-control mr-sm-2" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div id="page-inner">

        <div class="row">

            <div class="col-md-12">

                <!-- Advanced Tables -->
                <div class="card">
                    <div class="card-action">



                        <div class="card-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Mã số đại lý  </th>
                                        <th>Tên Đại Lý  </th>
                                        <th>Điện Thoại  </th>
                                        <th>Email  </th>
                                        <th>Địa Chỉ  </th>
                                        <th>Tên người quản lý </th>
                                        <th>Trạng trái </th>
                                        <th colspan="2"> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($agencies as $key=> $agency)
                                        <tr class="odd gradeX">
                                            <td>{{$agency->id}}</td>
                                            <td>{{$agency->name}} </td>
                                            <td>{{$agency->phone}} </td>
                                            <td>{{$agency->email}} </td>
                                            <td>{{$agency->address}} </td>
                                            <td>{{$agency->manager_name}} </td>
                                            <td class="status{{$agency->status}}"></td>
                                            <td class="center"><a href="{{route('agency.edit',$agency->id)}}"><button  class="btn btn-warning btn-lg">CẬP NHẬT </button></a> </td>
                                            <td class="center"><a onclick="return confirm('Bạn có muốn xóa không ?')" href="{{route('agency.delete',$agency->id)}}"><button  class="btn btn-danger btn-lg">XÓA </button></a> </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

            <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p></footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){
            $( ".status1" ).text( "Đang Hoạt Động" )
            $( ".status0" ).text( "Không hoạt động" )

        });

    </script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
