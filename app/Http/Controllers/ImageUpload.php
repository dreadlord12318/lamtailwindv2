<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUpload extends Controller
{
    public function upload(Request $request){
        $accepted_origins = array("http://localhost", "http://127.0.0.1:8000/", "https://lamtailwind.lumikha.dev");
        // $fileName=$request->file('file')->getClientOriginalName();
        // $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        // return response()->json(['location'=>"/storage/$path"]); 
        
        $imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);

    }
}
