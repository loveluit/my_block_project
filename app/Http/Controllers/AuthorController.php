<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{
     function author_post(Request $request){

        if(Author::where('email',$request->email)->exists()){

            if(Auth::guard('author')->attempt(['email'=>$request->email ,'password'=>$request->password])){

                if(Auth::guard('author')->user()->status != 1){

                   Auth::guard('author')->logout();

                    return back()->with('aprove','Wait for Approve Admin');
                }
                else{
                    return redirect('/');
                }

            }
            else{
                return back()->with('pass','Weong Password');
            }



        }
        else{

            return back()->with('email','Email does not match');
        }

    }

        // Logout

        public function Author_logout(){

            Auth::guard('author')->logout();

            return redirect('/');
        }

        // Author Dashboard


        public function Author_dashboard(){

            return view('font_end.Author.dashboard');
        }
        // Author Status

        public function Author_status($id){

            $author = Author::find($id);
            if($author->status==1){

                Author::find($id)->update([

                    'status'=>0,
                ]);
                return back();
            }else{
                Author::find($id)->update([

                    'status'=>1,
                ]);
                return back();

            }

        }//  Author Profile Edite

        public function Author_edit(){

            return view('font_end.Author.author_edit');
        }

        //Author Profile Edite Update

        public function Author_update(Request $request){

       if((Auth::guard('author')->user()->image == null)){

        Author::find(Auth::guard('author')->id())->update([
            'name' =>$request->name,
            'email' =>$request->email,
           ]);

           return back()->with('update','Your Update Successfullly');

        }else{

            if((Auth::guard('author')->user()->image != null)){

                $delete_from = public_path('uploads/author/'.Auth::guard('author')->user()->image);
                unlink($delete_from);

            }
            $data = new Author;
            $image = $request->image;


               if($image){
                 $imagename = time().'.'.$image->getClientOriginalExtension();
                 $request->image->move('uploads/author/',$imagename);

                 $data->image=$imagename;

                    Author::find(Auth::guard('author')->id())->update([
                      'name' =>$request->name,
                      'email' =>$request->email,
                      'image' =>$imagename,
                     ]);

                     return back()->with('update','Your Update Successfullly');


              }
        }
    }  //Author Profile Password Edite Update

    public function Author_pass_update(Request $request){

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


        if(Hash::check($request->current_password,Auth::guard('author')->user()->password)){

            Author::find(Auth::guard('author')->id())->update([
                'password'=>bcrypt($request->password),
            ]);

            return back()->with('pass','Password has Updated');

        }else{

            return back()->with('err','Current Password does not match');
        }

    } 
}





















