<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function category(){

        $categorys = Category::all();

        return view('Admin.Category.category',compact('categorys'));

    }

    // category Insert
    public function category_insert(Request $request){

           $request->validate([
            'category_name' => 'required',
            'category_image'=> ['required','mimes:png,jpg','max:1024'],
           ]);

           $cat_img = $request->category_image;
           $extension = $cat_img->extension();
           $file_name =uniqid().'.'.$extension;
           $manager = New ImageManager(new Driver());
           $image = $manager->read($cat_img);
           $image->scale(width:300);
           $image->save(public_path('uploads/category/'.$file_name));

           //inser
           Category::insert([
                'category_name'=>$request->category_name,
                'category_image'=>$file_name,
                'created_at'=>Carbon::now(),
           ]);

           return back()->with('cat','Category Added Success');

    }  // Delete Category

    public function delete_cate($cat_id){

       // $category =Category::find($cat_id);


       Category::find($cat_id)->Delete();

       return back()->with('del_cat', 'Delete category Successfully' );






    }

        public function edit_category($id){

           $cate = Category::find($id);

            return view('Admin.Category.edite',compact('cate'));
        }






    //Edite / Update Category

            public function update_category(Request $request,$id){

                if($request->category_image != null){

                    $request->validate([
                        'category_name' => 'required',
                        'category_image'=> ['required','mimes:png,jpg','max:1024'],
                        ]);

                        $cat_img = $request->category_image;
                        $extension = $cat_img->extension();
                        $file_name =uniqid().'.'.$extension;
                        $manager = New ImageManager(new Driver());
                        $image = $manager->read($cat_img);
                        $image->scale(width:300);
                        $image->save(public_path('uploads/category/'.$file_name));

                        //inser
                        Category::find($id)->update([
                            'category_name'=>$request->category_name,
                            'category_image'=>$file_name,
                            'created_at'=>Carbon::now(),
                        ]);

                        return redirect()->route('category')->with('update','Category Updated Success');

                }else{

                    Category::find($id)->update([
                        'category_name'=>$request->category_name,

                    ]);

                    return redirect()->route('category')->with('update','Category Updated Success');
                }


        }  // Trash Bin

            public function Trash_category(){

                $category = Category::onlyTrashed()->get();
                return view('Admin.Category.trash',compact('category'));
            }
            // Trash Bin Restore
            public function Restore_category($id){

                Category::onlyTrashed()->find($id)->restore();

                return back()->with('restore','Restore Successfully');

            }

            // Parmanly Delete
            public function hard_detele_category($id){


                $category = Category::onlyTrashed()->find($id);
                    $delete_from =public_path('uploads/category/'.$category->category_image);
                    unlink($delete_from);

                    Category::onlyTrashed()->find($id)->forceDelete();

                    return back()->with('restore','parmanently Delete Successfully');

            }

            // Checkbox delete
            public function checkdel_category(Request $request){

               foreach($request->category_id as $cat_id){

                Category::find($cat_id)->delete();
               }
               return back()->with('del_cat', 'Delete All Checkbox category Successfully' );
            }

                // Checkbox All Restore
                public function check_restore_category(Request $request){

                    if($request->action_btn == 1){

                        foreach($request->category_id as $id){

                            Category::onlyTrashed()->find($id)->restore();
                           }
                           return back()->with('restore',' All Check Restore Successfully');

                    }else{

                    if($request->action_btn == 2){

                        foreach($request->category_id as $id){

                            $category = Category::onlyTrashed()->find($id);
                            $delete_from =public_path('uploads/category/'.$category->category_image);
                            unlink($delete_from);

                            Category::onlyTrashed()->find($id)->forceDelete();
                        }
                    }

                    }
                    return back()->with('restore','parmanently Delete Successfully');


                 } // Tags

                 public function Tag(){
                  $tags = Tag::all();
                    return view('Admin.Category.Tags.tag',compact('tags'));
                 }

                 // Tags Store

                 public function Tag_store(Request $request){

                    Tag::insert([

                         'tag_name' =>$request->tag_name,
                        'created_at'=>Carbon::now(),

                    ]);

                    return back()->with('tag', 'Tag insert Successfully');

                 }
                 // Tags Delete

                 public function Tag_delete($id){

                    Tag::find($id)->Delete();

                    return back()->with('del', 'Delete Tags Successfully' );

                 }


}
