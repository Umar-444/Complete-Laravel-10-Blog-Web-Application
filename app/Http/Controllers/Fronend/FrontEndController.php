<?php

namespace App\Http\Controllers\Fronend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    Public  function index(){

        $category_all= Category::where('status','0')->get();
        $latest_posts= Post::where('status','0')->orderby('created_at',"DESC")->get()->take(8);
        return view('frontend.index', compact('category_all','latest_posts'));
    }

    public function ViewCategoryPost(string $category_slug){

        $category= Category::where('slug',$category_slug)->where('status','0')->first();

        if($category){

            $post=Post::where('category_id',$category->id)->where('status','0')->paginate(10);
            return view('frontend.post.index',compact('post','category'));

        }

        else{
            return view('/');
        }




    }
    public function viewpost(string $category_slug,string $post_slug ){

        $category= Category::where('slug',$category_slug)->where('status','0')->first();

        if($category){

            $post=Post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
            $latestpost=Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get()->take(10);

            return view('frontend.post.view',compact('post','latestpost'));

        }

        else{
            return view('/');
        }


    }
}
