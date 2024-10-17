@extends('layouts.master')
@section('title','category')


@section('content')
<div class="container-fluid px-4">
    <div class="card">
        .<div class="card">
            <div class="card-header">
                <h4>View Category <a href="{{url('admin/add-category')}} " class="btn btn-primary btn-sm float-end">Add category</a></h4>
            </div>
            <div class="card-body">
                @if (session('massage'))

                <div class="alert alert-success">{{session('massage')}}</div>

                @endif
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>delete</th>


                    </tr>
                </thead>
                <tbody>

                    @foreach ($category as $items)
                    <tr>
                        <td scope="row">{{$items->id}}</td>
                        <td>{{$items->name}}</td>
                        <td><img src="{{asset('uploads/category/'.$items->image)}}" width="50px" height="50px" alt="img"></td>
                        <td>{{$items->status == '1' ? 'hidden':'show'}}</td>
                        <td>
                            <a href="{{url('admin/edit-category/'.$items->id)}}" class="btn btn-success">Edit </a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-category/'.$items->id)}}" class="btn btn-danger">delete </a>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
            </div>

        </div>
    </div>


    </div>

@endsection
