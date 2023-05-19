<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="dark-mode">
        <!-- Content Header (Page header) -->
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$product->title}} Image Gallery</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_category')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Image List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="card card-primary" style="margin-left: 8px;margin-top: 8px">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('admin_image_store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th style="text-align: center">Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img style="height: 50px" src="{{Storage::url($rs->image)}}">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin_image_delete',['pid'=>$product->id,'id'=>$rs->id])}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->
                        </div>
                    </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
</body>
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
