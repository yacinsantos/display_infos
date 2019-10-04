<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TaskController extends Controller
{
    public function handleInputs(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'skills' => 'required',
            'description' => 'required',
            'image' => 'file|image|max:5000'
        ]);
        //$request->image->store('uploads', 'public');
        $result = $request->input();

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $size = $image->getSize();
        $image->move(public_path('images'), $new_name);
        $result['image'] = $new_name;
        
        //resizing the image
        /*$path = 'images' . $new_name; 
        Image::make($path)->fit(300, 300)->save();*/


        return view('showProfile', compact('result'));
    }
}
