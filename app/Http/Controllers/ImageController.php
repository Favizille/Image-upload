<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {
        $user = User::create($request->all());

        return $user;

    }
}
