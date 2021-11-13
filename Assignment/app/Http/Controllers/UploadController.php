<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; 
use App\Models\ImageModel;
use Session;

class UploadController extends Controller
{
    public function upload(){
        $image = ImageModel::all();
        
           return view('upload', compact('image'));
       }
       public function uploadimage(Request $req){
   
           $images= $req->file('filename');
           $alttext= $req->alttext;
           
           if ($req->hasFile('filename')) :
                   foreach ($images as $item):
                          
                        //    $time=image_name();
                       $var = date_create();
                     $time = date_format($var, 'YmdHis');
                      
                       $imageName = $time . '-' . $item->getClientOriginalName();
                       $item->move(public_path().'/thumbnail/', $imageName);
                   
                       $obj = new ImageModel();
                       $obj->filename = $imageName;
                       $obj->alttext = $alttext;
                       $obj->save();
               
                   endforeach;
                  
           endif;
           
           
                 
           
                  
           
                   Session::flash('message', 'Image upload successfully successfully');
                   return redirect()->back();
   }

}

