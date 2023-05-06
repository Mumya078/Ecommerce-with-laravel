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
                            <li class="breadcrumb-item"><a href="{{route('admin_category')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                            <h3 class="card-title">Show Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categories</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Description</th>
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
                                        <td>{{$data->timestamps}}</td>
                                        <td><span class="tag tag-success">{{$data->status}}</span></td>
                                        <td>{{$data->desc}}</td>
                                        <td>{{$data->keywords}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td><a href="{{route('admin_category_edit',$data->id)}}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
                                        <td><a href="{{route('admin_category_delete',$data->id)}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
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
