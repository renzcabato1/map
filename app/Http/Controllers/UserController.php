<?php

namespace App\Http\Controllers;
use App\MapUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'email' => 'required|max:255|email',
        // ]);

        $new_user = new MapUser;
        $new_user->email = $request->email;
        $new_user->name = $request->name;
        $new_user->save();

        return array(
            'status' => 'success',
            'data' => $new_user,
        );
    }
}
