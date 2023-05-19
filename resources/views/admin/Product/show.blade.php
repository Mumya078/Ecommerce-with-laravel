@extends('layouts.adminbase')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Show {{$data->title}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Show Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-primary" style="margin-left: 8px;margin-top: 8px">
                        <div class="card-header">
                            <h3 class="card-title">Show Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Shipping Cost</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Keywords</th>
                                    <th>Updated Date</th>
                                    <th>Created Date</th>
                                    <th style="text-align: center">Edit</th>
                                    <th style="text-align: center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->category->title}}</td>
                                        <td>{{$data->desc}}</td>
                                        <td>{{$data->detail}}</td>
                                        <td style="text-align: center">{{$data->price}}</td>
                                        <td style="text-align: center">{{$data->stock}}</td>
                                        <td style="text-align: center">{{$data->shipping_cost}}</td>
                                        <td>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" style="height: 40px"
                                            @endif
                                        </td>
                                        <td><span class="tag tag-success">{{$data->status}}</span></td>
                                        <td>{{$data->keywords}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td><a href="{{route('admin_product_edit',$data->id)}}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
                                        <td><a href="{{route('admin_product_delete',$data->id)}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
