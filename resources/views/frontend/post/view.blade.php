@extends('layouts.app')
@section('title' , "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword',"$post->meta_keyword")
@section('content')


<div class="py-4">

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                        <div class="category-heading">
                        <h4>{!!$post->name!!}</h4>
                        </div>

                        <div class="mt-3">
                            <h6>{{$post->category->name.'/'.$post->name}}</h6>
                        </div>
                    <div class="card card-shadow mt-4">
                        <div class="card-body post-description">
                            {!!$post->description!!}
                        </div>
                    </div>


                    <div class="comment-area mt-4 ">

                        <div class="card card-body">

                               <h6  class="card-title"> Leave a comment </h6>
                               <form action="{{url('comments')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="post_slug" value="{{$post->slug}}">
                                   <textarea required name="comment_body" class="form-control" id="" cols="30" rows="10">

                                   </textarea>
                                   <button type="submit" class="btn btn-warning my-3">Submit</button>
                               </form>

                        </div>
                        <div class="card card-body shadow-sm mt-3">
                            <div class="detail-area">
                              <h6 class="user-name mb-1">
                                user one

                                <small class="ms-3 text-primary"> Commented on: 3-8-2022</small>
                              </h6>
                              <p class="user-comment mb-1">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  In itaque inventore esse nobis numquam officiis
                                  sed aspernatur pariatur quod sint aliquid est,
                                  non corrupti error distinctio, repellat optio. Esse, nisi!
                              </p>
                            </div>
                            <div>
                                <a href="" class="btn btn-primary btn-sm me-2" >edit</a>
                                <a href="" class="btn btn-danger btn-sm me-2" >delete</a>

                            </div>
                        </div>

                    </div>

                </div>



                <div class="col-md-4">
                    <div class="border p-2 my-2">
                    <h4 > Advertising Area </h4>
                    </div>
                    <div class="border p-2 my-2">
                        <h4 > Advertising Area </h4>
                        </div>
                        <div class="border p-2 my-2">
                            <h4 > Advertising Area </h4>
                        </div>

                     <div class="card mt-3">
                         <h3>Latest Post</h3>
                         @foreach ($latestpost as $latest_item )

                            <a href="{{url('tutorial/'.$latest_item->category->slug.'/'.$latest_item->slug)}}" class="text-decoration-none">
                                <h6>{{$latest_item->name}}</h6>
                            </a>



                         @endforeach
                     </div>

                </div>




        </div>
    </div>
</div>



@endsection
