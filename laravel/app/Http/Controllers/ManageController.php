<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageController extends Controller
{
    public function index() {
        $users = User::all();
        return view('manage.show')->with('users', $users);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('manage.edit', compact('user'));
    }

    public function update(Request $request) {

        $id = $request -> id;
        $userRole = $request -> role;

        User::where('id', $id)->update(
            ['role' => $userRole]
        );

        $users = User::all();

        return redirect()->route('manage.show')->with('users', $users);

    }
}
