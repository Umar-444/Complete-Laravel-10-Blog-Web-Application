@extends('layouts.master')
@section('title','category')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
    <h4 class="">Add category</h4>
<div class="card-body ">

    @if ($errors->any())

        @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

        @endforeach

    @endif

    <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label for="">Category name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description"  rows="5" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="">image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <h6>seo tags</h6>
            <div class="mb-3">
                <label for="">meta Title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">meta description</label>
                <textarea name="meta_description"  rows="5" class="form-control"></textarea>

            </div>
            <div class="mb-3">
                <label for="">meta keyword</label>
                <textarea name="meta_keyword"  rows="5" class="form-control"></textarea>

            </div>

            <h6>Status Mode</h6>
            <div class="row">
            <div class="col-md-3 mb-3">
                <label >navbar status</label>
                <input type="checkbox" name="navbar_status" >
            </div>
            <div class="col-md-3 mb-3">
                <label >status</label>
                <input type="checkbox" name="status" >
            </div>
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-success">Save Category </button>
            </div>
        </div>

    </form>

    </div>
</div>
    </div>
</div>
@endsection
