@extends('layouts.adminbase')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit {{$data->title}}</h1>
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
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" value="{{$data->title}}" class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                        <option value="0" style="color: #ff2b39">New Category</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea type="input" value="{{$data->desc}}" class="form-control" id="desc" name="desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" class="form-control" id="keywords" value="{{$data->keywords}}" name="keywords">
                                </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="status" value="{{$data->status}}">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
