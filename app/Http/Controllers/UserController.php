<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit()
    {
      $users = User::all();

      return view('edituser', compact('users'));
    }

    public function update(Request $request, $usuario)
    {
      $user = User::find($usuario);

      if ($request->has('name') && $request->name !== null) {
        $user->name = $request->name;
      }

      if ($request->has('last_name') && $request->last_name !== null) {
        $user->last_name = $request->last_name;
      }

      if ($request->has('name') && $request->name !== null) {
        $user->name = $request->name;
      }

      if ($request->has('email') && $request->email !== null) {
        $user->email = $request->email;
      }


      if ($request->has('password') && $request->password !== null) {
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
      }

      if ($request->has('typeOfUser') && $request->typeOfUser !== null) {
        $user->typeOfUser = $request->typeOfUser;
      }

      $user->save();

      return redirect('/edituser');

    }

    public function delete()
    {
      $users = User::all();

      return view('deleteuser', compact('users'));
    }

    public function destroy(Request $request)
    {
      $user = User::find($request->input('user'));

      $user->cart()->sync([]);

      $user->delete();
    }
}
