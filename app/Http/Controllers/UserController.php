<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Carbon\Carbon;

class UserController extends Controller
{
    public function edite_profile(){

        return view('Admin.User.edite_profile');
    }
    // Update Profile

    public function update_profile(Request $request){

        User::find(Auth::user()->id)->update([

            'name'=>$request->name,
            'email'=>$request->email,

        ]);

        return back()->with('success','Profile Info Updated');

    } // Change Password

    public function update_password(Request $request){

        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed',Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()


                ],
            'password_confirmation' => 'required',
        ]);

        if(Hash::check($request->current_password,Auth::user()->password)){

            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),
            ]);

            return back()->with('pass','Password has Updated');

        }else{

            return back()->with('err','Current Password does not match');
        }
    }

        //change Photo

        public function update_photo(Request $request){

            $request->validate([
                'photo'=> ['required','mimes:png,jpg','max:1024'],
              ]);

              // Photo delete akta uplode nile onno ta delete hbe

            //   if(Auth::user()->photo!==null){
            //     $delete =public_path('uploads/users'.Auth::user()->photo);

            //     unlink($delete);
            //   }

        //    $photo = $request->photo;
        //    $extension =$photo->extension();
        //    $file_name=uniqid().'.'.$extension;
        //    $manager = new ImageManager(new Driver());
        //    $image = $manager->read($photo);
        //    $image->scale(width:200);
        //    $image->save(public_path('uploads/users/'.$file_name));

        //          User::find(Auth::id())->update([
        //              'photo' =>$file_name,
        //             ]);

       $data = new User;
        $photo = $request->photo;


              if($photo){
                $imagename = time().'.'.$photo->getClientOriginalExtension();
                $request->photo->move('uploads/users/',$imagename);

                $data->photo=$imagename;

                User::find(Auth::id())->update([
                    'photo' =>$imagename,
                       ]);


              }



             // $data->save();

              return back()->with('update','Photo Updated Success');
        }

        // User List

        public function user_list(){

            $users = User::all();

            return view('Admin.User.user',compact('users'));
        }

        // Add User /Registetion

        public function Add_user(Request $request){

            User::insert([

                'name'=>$request->name,
                'email'=>$request->email,
                'password' =>bcrypt($request->password),
                'created_at'=>Carbon::now(),
            ]);

            return back()->with('add_user','Add User Successfuly');


        }

            // Delete user List

            public function delete_user($id){

              $user = User::find($id);

              if($user->photo !=null){

                    $delete_from= public_path('uploads/users/'.$user->photo);
                    unlink($delete_from);
               }

            User::find($id)->delete();



            return back()->with('del','Delete Successfully');

            }  //Author Add Aprove Admin

            public function Author(){
                $authors = Author::all();
                return view('Admin.author',compact('authors'));

            }

            // Author All Post

            public function Author_all_post(){

                $posts=Post::latest()->get();
                return view('Admin.all_post',[
                    'posts'=>$posts,
                ]);
            }
            // All post Status

            public function Author_all_post_status($id){

                $post = Post::find($id);
                if($post->status==1){

                    Post::find($id)->update([

                        'status'=>0,
                    ]);
                    return back();
                }else{
                    Post::find($id)->update([

                        'status'=>1,
                    ]);
                    return back();

                }

            }

}
