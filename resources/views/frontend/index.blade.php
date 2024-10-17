@extends('layouts.app')

@section('content')

<div class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($category_all as $all_cate_item)
                    <div class="item ">
                        <a class="text-decoration-none" href="{{url('tutorial/'.$all_cate_item->slug)}}">



                         <div class="card">
                            <img src="{{asset('uploads/category/'. $all_cate_item->image)}}" width="90px" height="180px" class="" alt="curosal image">
                            <div class="card-body ">
                                <h4 class="text-dark">{{$all_cate_item->name}}</h4>
                            </div>

                         </div>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-1 bg-light">

    <div class="container border">
        <div class="row">
            <div class="col-md-12">
                    <h4>ADVERTISING AREA</h4>
                    <div class="underline">  </div>


            </div>
        </div>
    </div>

</div>
<div class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h4>Zalmi Coding</h4>
                    <div class="underline">  </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem illum, assumenda vitae quas labore eos eveniet voluptas aperiam nam optio atque possimus quaerat quis sunt facilis quod iusto ipsa laudantium!
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus ut debitis iure, corrupti hic tempore beatae. Quidem at expedita quibusdam molestias quam sunt sit. Quia sit odit cum nostrum recusandae?
                        </p>


            </div>
        </div>
    </div>

</div>

<div class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h4>All Categories List</h4>
                    <div class="underline">  </div>



            </div>

            @foreach ($category_all as $allcat_item )

            <div class="col-md-3">

                    <div class="card card-body mb-3">
                        <a href="{{url('tutorial/'.$allcat_item->slug)}}" class="text-decoration-none">
                      </h5 class="text-dark mb-0">{{$allcat_item->name}}</h5></a>
                    </div>
            </div>

            @endforeach
        </div>
    </div>

</div>
<div class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h4>Latest Post</h4>
                    <div class="underline">  </div>



            </div>

           @foreach ($latest_posts as $latest_posts_item)

            <div class="col-md-3">

                    <div class="card card-body mb-3">
                        <a href="{{url('tutorial/'. $latest_posts_item->category->slug.'/'.$latest_posts_item->slug)}}" class="text-decoration-none">
                      </h5 class="text-dark mb-0">{{$latest_posts_item->name}}</h5></a>
                      <h6>Posted on : {{$latest_posts_item->created_at->format('d-m-Y')}}</h6>
                    </div>
            </div>

            @endforeach

        </div>
    </div>

</div>

@endsection
