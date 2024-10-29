<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\PassReset;
use App\Notifications\PassResetNotification;
use Illuminate\Support\Facades\Notification;

class PassResetController extends Controller
{
    public function pass_reset(){

        return view('font_end.Author.pass_reset');
    }

    //
    public function pass_reset_post(Request $request){

        $author_info = Author::where('email',$request->email)->first();


        if(Author::where('email',$request->email)->exists()){

          $author = PassReset::create([

            'author_id' => $author_info->id,
            'token'=>uniqid(),

          ]);
          Notification::send( $author_info, new PassResetNotification($author));
          return back()->with('exists',"Your Email $request->email");
        }else{

            return back()->with('exists','Incurent Email');
        }
    } //

    function pass_reset_form($token){


        if(PassReset::where('token',$token)->exists()){

            return view('font_end.Author.passreset_form',[
                'token'=>$token,
            ]);

        }else{
            return back()->with('exists','Incurent password');
        }





    }//

    public function pass_reset_update(Request $request, $token){

        if(PassReset::where('token',$token)->exists()){

            $author =PassReset::where('token',$token)->first();
              Author::find($author->author_id)->update([
                'password'=>bcrypt($request->password),
              ]);
              PassReset::where('token',$token)->delete();

              return redirect()->route('author.login');

        }else{
            abort('404');
        }

    }


}
