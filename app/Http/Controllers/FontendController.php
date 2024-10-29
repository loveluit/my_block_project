<?php

namespace App\Http\Controllers;

use App\Mail\AuthorMailVerify;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Author;
use App\Models\Category;
use App\Models\Mail_verify;
use App\Models\Populer;
use App\Models\Tag;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class FontendController extends Controller
{
    public function Master(){
        $categorys=Category::all();
        $tags=Tag::all();
        $posts=Post::where('status',1)->get();
        $slider_post=Post::where('status',1)->latest()->take(3)->get();
        $populer_posts =Populer::where('total','>',10)->get();
        return view('font_end.index',[
            'categorys'=>$categorys,
            'tags'=>$tags,
            'posts'=>$posts,
            'slider_post'=>$slider_post,
            'populer_posts'=> $populer_posts,
        ]);
    }
    //Author login

    public function Author_login(){

        return view('font_end.Author.login');
    }
    //Author register
    public function Author_register(){

        return view('font_end.Author.register');
    }  // insert Author


    public function Author_insert(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required','unique:authors'],
            'password' => ['required',Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()


                ],
             ]);

            $author_id= Author::insertGetID([
                'name'=>$request->name,
                'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
            // 'email_verified_at'=>Carbon::now(),

             ]);

             $author = Mail_verify::create([
                'author_id'=>$author_id,
                'token'=>uniqid(),

             ]);

             Mail::to($request->email)->send(new AuthorMailVerify($author));

        return back()->with('author',"Your Registetion Successfully & Wait for Aprove $request->email");

        //return back()->with('author',"Your Registetion Successfully & Wait for Aprove $request->email");
    }

    //Post details page


    function Author_post_details($slug_id){

        $post=Post::where('slug',$slug_id)->first();

            if(Populer::where('post_id',$post->id)->exists()){
                Populer::where('post_id',$post->id)->increment('total',1);
            }else{
                Populer::insert([
                    'post_id'=>$post->id,
                    'total'=>1,
                ]);
            }

        return view('font_end.Author.post.details',[
            'post'=>$post,
        ]);
    }// Author post

    function Author_post($author_id){

            $author=Author::find($author_id);
            $posts=Post::where('author_id',$author_id)->get();

        return view('font_end.Author.post.author_post',[
            'author'=>$author,
            'posts'=>$posts,
        ]

        );
    } //Author Category

    function Author_post_category($category_id){
        $category=Category::find($category_id);

        $posts=Post::where('category_id',$category_id)->get();


        return view('font_end.Author.post.post_category',[
            'category'=>$category,
            'posts'=>$posts,
        ]);
    }

        //Search Bar

        function Search(Request $request){
            $data =$request->all();

            $search_poosts =Post::where(function($q) use ($data){


                if(!empty($data['keyword']) && $data['keyword'] != '' && $data['keyword'] != 'undefinded'){

                    $q->where(function($q) use ($data) {


                        $q->where('title','like','%'.$data['keyword'].'%');
                    });
                }

            } )->get();



            return view('font_end.Author.post.search',[

                'search_poosts'=> $search_poosts,
            ]);
        }

           // Mail Verify

      public function Mail_verify($token){

        if(Mail_verify::where('token',$token)->exists()){

            $author =Mail_verify::where('token',$token)->first();
              Author::find($author->author_id)->update([
                'email_verified_at'=>carbon::now(),
              ]);
              Mail_verify::where('token',$token)->delete();

              return redirect()->route('author.login');

        }else{
            abort('404');
        }

    }


}
