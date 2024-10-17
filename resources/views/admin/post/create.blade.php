@extends('layouts.master')
@section('title','POST')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
    <h4 class="">Add POST</h4>
<div class="card-body ">

    @if ($errors->any())
                <div class="alert alert-danger" >
            @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

        @endforeach
    </div>

    @endif

    <form action="{{url('admin/add-post')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label for="">Category </label>
                <select name="category_id"  class="form-control">
                    @foreach ($category as $catitem)
                    <option value="{{$catitem->id}}">{{$catitem->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" id="mysummernote"  rows="5" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="">YOUTUBE</label>
                <input type="text" name="yt_iframe" class="form-control">
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
                <label >status</label>
                <input type="checkbox" name="status" >
            </div>
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-success">Save post </button>
            </div>
        </div>


    </form>

    </div>
</div>
    </div>
</div>
@endsection
