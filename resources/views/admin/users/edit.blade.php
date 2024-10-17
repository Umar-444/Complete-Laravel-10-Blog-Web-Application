@extends('layouts.master')
@section('title','Users')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <h4>View Users<a href="{{url('admin/user')}} " class="btn btn-primary btn-sm float-end">Back</a></h4>
    <div class="card-header">
    <h4 class="">update user</h4>
<div class="card-body ">

    @if ($errors->any())
                <div class="alert alert-danger" >
            @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

        @endforeach
    </div>

    @endif




        <div class="mb-3">
            <label >Full name</label>
            <p class="form-control">{{$users->name}}</p>
        </div>
        <div class="mb-3">
            <label >email Id</label>
            <p class="form-control">{{$users->email}}</p>
        </div>
        <div class="mb-3">
            <label >created at</label>
            <p class="form-control">{{$users->created_at->format('d/m/y')}}</p>
        </div>
        <form action="{{url('admin/update-user/'.$users->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

        <div class="mb-3">
            <label >Role as</label>
                <select name="role_as" class="form-control">
                    <option value="1"{{$users->role_as=='1'?'selected':''}}>Admin</option>
                    <option value="0"{{$users->role_as=='0'?'selected':''}}>User</option>
                    <option value="2"{{$users->role_as=='2'?'selected':''}}>Blogger</option>

                </select>
        </div>


            <div class="col-md-6 ">
                <button type="submit" class="btn btn-success">update user </button>
            </div>
        </div>


    </form>

    </div>
</div>
    </div>
</div>
@endsection
