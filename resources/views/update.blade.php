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
<div class="container-fluid">
    <form method="post" action="{{route('agency.update',$agency->id)}} ">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Mã Số Đại Lý</label>
                <input name="id" type="text" value="{{$agency->id}}" class="form-control " disabled>
                <p class="alert-success">{{ $errors->first('id') }}</p>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tên Đại Lý</label>
                <input name="name" type="text" value="{{$agency->name}}" class="form-control">
                <p class="alert-success">{{ $errors->first('name') }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Số Điện Thoại</label>
                <input name="phone" value="{{$agency->phone}}" type="text" class="form-control">
                <p class="alert-success">{{ $errors->first('phone') }}</p>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input name="email" value="{{$agency->email}}" type="email" class="form-control">
                <p class="alert-success">{{ $errors->first('email') }}</p>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Dia Chi</label>
            <input name="address" value="{{$agency->address}}" type="text" class="form-control">
            <p class="alert-success">{{ $errors->first('address') }}</p>
        </div>
        <div class="form-group">
            <label for="">Tên người quản lý</label>
            <input name="manager_name" type="text" class="form-control" value="{{$agency->manager_name}}">
            <p class="alert-success">{{ $errors->first('manager_name') }}</p>
        </div>
        <div class="form-row">
            <label for="inputState">Status</label>
            <select name="status" id="inputState" class="form-control">
                <option value="0">Khong Hoat Dong</option>
                <option value="1">Hoạt Động</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cap Nhat</button>
    </form>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('select option[value="{{$agency->status}}"]').attr("selected", true);


    });
</script>
</body>
</html>

