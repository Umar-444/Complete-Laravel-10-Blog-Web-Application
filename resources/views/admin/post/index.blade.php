@extends('layouts.master')
@section('title','POSTS')


@section('content')
<div class="container-fluid px-4">
    <div class="card">
        .<div class="card">
            <div class="card-header">
                <h4>View POST<a href="{{url('admin/add-post')}} " class="btn btn-primary btn-sm float-end">Add Post</a></h4>
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
                        <th>category </th>
                        <th>post name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>delete</th>


                    </tr>
                </thead>

                    <tbody>

                        @foreach ($post as $items)
                        <tr>
                            <td scope="row">{{$items->id}}</td>
                            <td>{{$items->category->name}}</td>
                            <td>{{$items->name}}</td>



                            <td>{{$items->status == '1' ? 'hidden':'show'}}</td>
                            <td>
                                <a href="{{url('admin/edit-post/'.$items->id)}}" class="btn btn-success">Edit </a>
                            </td>
                            <td>
                                <a href="{{url('admin/delete-post/'.$items->id)}}" class="btn btn-danger">delete </a>
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
