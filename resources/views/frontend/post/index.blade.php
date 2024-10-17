@extends('layouts.app')



@section('content')






<div class="py-4">

        <div class="container">
            <div class="row">
                <div class="col-md-9">

                        <div class="category-heading">
                        <h4>{{$category->name}}</h4>
                    </div>
                    @forelse ($post as $postitem)
                    <div class="card card-shadow mt-4">
                    <div class="card-body">
                    <a href="{{url('tutorial/'.$category->slug.'/'.$postitem->slug)}}" class="text-decoration-none">
                        <h2 class="post-heading">{{$postitem->name}}</h2>
                    </a>
                    <h6>Post on: {{$postitem->created_at->format('d-m-t')}}
                        <span class="ms-3">Post by: {{$postitem->user->name}}</span>
                    </h6>



                    </div>

                </div>
                    @empty
                    <div class="card card-shadow mt-4">
                        <h2 class="">no Post Aailable </h2>
                     </div>
                    @endforelse

                    <div class="your-paginate">
                        {{$post->links()}}
                    </div>
                </div>



                <div class="col-md-3">
                   <h4 class="border"> Advertising Area </h4>
                </div>
            </div>
        </div>
</div>



@endsection
