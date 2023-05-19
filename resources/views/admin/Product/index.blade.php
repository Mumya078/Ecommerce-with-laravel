@extends('layouts.adminbase')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Admin</a></li>
                            <li class="breadcrumb-item active">Product List</li>
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
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Shipping Cost</th>
                                            <th>Detail</th>
                                            <th >Image And Image Gallery</th>
                                            <th>Status</th>
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
                                                <td>{{$rs->category->title}}</td>
                                                <td>{{$rs->desc}}</td>
                                                <td>{{$rs->price}}</td>
                                                <td>{{$rs->stock}}</td>
                                                <td>{{$rs->shipping_cost}}</td>
                                                <td>{{$rs->detail}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                    @endif
                                                        <a href="{{route('admin_image',['pid'=>$rs->id])}}" class="btn btn-sm btn-app"
                                                        onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <i class="fas fa-edit"></i> Gallery
                                                        </a>
                                                </td>
                                                <td><span class="tag tag-success">{{$rs->status}}</span></td>
                                                <td>{{$rs->desc}}</td>
                                                <td>{{$rs->keywords}}</td>
                                                <td><a href="{{route('admin_product_edit',$rs->id)}}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
                                                <td><a href="{{route('admin_product_delete',$rs->id)}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
                                                <td><a href="{{route('admin_product_show',$rs->id)}}"><button type="button" class="btn btn-block btn-success">Show</button></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        <a href="{{route('admin_product_create')}}">
                        <button type="button" class="btn btn-block btn-success btn-lg">Add Product</button>
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
