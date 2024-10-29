<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function Author_Add_post(){
        $categorys=Category::all();
        $tags=Tag::all();

        return view('font_end.Author.add_post',[
            'categorys'=>$categorys,
            'tags'=>$tags,
        ]);
    } // Author Post Insert

    public function Author_post_insert(Request $request){

        // $slug = Str::lower(str_replace('','-',$request->title)).'-'.random_int(1000,3000);
        // return  $slug;
        // die();

        //thumbnail
        $post = new Post;
        $thumbnail = $request->thumbnail;


           if($thumbnail){
             $thumbnail_name = time().'.'.$thumbnail->getClientOriginalExtension();
             $request->thumbnail->move('uploads/post/thumbnail/',$thumbnail_name);

             $post->thumbnail=$thumbnail_name;
           }
             //priview
             $post = new Post;
             $priview = $request->priview;


                if($priview){
                  $priview_name = time().'.'.$priview->getClientOriginalExtension();
                  $request->priview->move('uploads/post/priview/',$priview_name);

                  $post->priview=$priview_name;
                }


        Post::insert([

            'author_id'=>Auth::guard('author')->id(),
            'category_id'=>$request->category_id,
            'read_time'=>$request->read_time,
            'title'=>$request->title,
            'slug'=>Str::lower(str_replace('','-',$request->title)).'-'.random_int(1000,3000),
            'desp'=>$request->desp,
            'tags'=>implode(',',$request->tag_id),
            'thumbnail'=>$thumbnail_name,
            'priview'=>$priview_name,
            'created_at'=>Carbon::now(),

        ]);

        return back()->with('post','Post data insert succrssfuly');

    }

    // My_post / View post

    public function Author_my_post(){

        $posts=Post::where('author_id',Auth::guard('author')->id())->get();

        return view('font_end.Author.post.my_post',[
            'posts'=>$posts,
        ]);
    } //Post Delete

    public function Author_post_del($id){

        $post =Post::find($id);

        $delete_from =public_path('uploads/post/thumbnail/'.$post->thumbnail);
        unlink($delete_from);

        $delete_from =public_path('uploads/post/priview/'.$post->priview);
        unlink($delete_from);

        Post::find($id)->delete();

        return back();


    }

    // Author list

    public function Author_list(){

        $list =Author::all();
        return view('font_end.Author.post.author_list',[
            'list'=>$list,
        ]);
    }


}
