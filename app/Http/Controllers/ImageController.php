<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);

        $newImageName = time().'_'. $request->email.'_'. $request->image->extension();
        $test = $request->image->move(public_path('images'), $newImageName);

        $user = User::create([
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "image" => $newImageName,
        ]);

        return view('showImage', ["user" => $user]);

    }
}
