@extends('layouts.adminbase')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_category')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Category List</li>
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
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Parent Category</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Keywords</th>
                                            <th style="text-align: center">Edit</th>
                                            <th style="text-align: center">Delete</th>
                                            <th style="text-align: center">Show</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img style="height: 50px" src="{{Storage::url($rs->image)}}">
                                                @endif
                                            </td>
                                            <td><span class="tag tag-success">{{$rs->status}}</span></td>
                                            <td>{{$rs->desc}}</td>
                                            <td>{{$rs->keywords}}</td>
                                            <td><a href="{{route('admin_category_edit',$rs->id)}}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
                                            <td><a href="{{route('admin_category_delete',$rs->id)}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
                                            <td><a href="{{route('admin_category_show',$rs->id)}}"><button type="button" class="btn btn-block btn-success">Show</button></a></td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        <a href="{{route('admin_category_create')}}">
                        <button type="button" class="btn btn-block btn-success btn-lg">Add Category</button>
                        </a>
                            <!-- /.card -->
                        </div>
                    </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
