<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->acc_type === 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/student/register/');
            }
        }
        return back()->with('message_fail', 'Username or Password invalid');
    }
    public function profile()
    {
        $user = User::where('id', auth()->user()->id)->get();
        return view('users.profile', ['user' => $user]);
    }
    // public function profile()
    // {
    //     $user = User::where('id', auth()->user()->id)->first();
    //     return view('profile', ['user' => $user]);
    // }

    public function edit(User $user)
    {
        return view('users.edit', ['userdata' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $dataToUpdate = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
        ];

        // Cek apakah password lama sesuai jika diisi
        if ($request->filled('current_password')) {
            if (password_verify($request->input('current_password'), $user->password)) {
                if ($request->filled('new_password')) {
                    $dataToUpdate['password'] = bcrypt($request->input('new_password'));
                }
            } else {

                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
        }

        User::where('id', $user->id)->update($dataToUpdate);

        return redirect('profile')->with('success', 'Profile Updated.');
    }

    public function destroy(User $user)
    {
        User::where('id', $user->id)->delete();
        return redirect('/');
    }

    public function register()
    {
        return view('users.register');
    }
    public function store(Request $request)
    {
        try {

            $validate = $request->validate([
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);
            // Hash::create('password');
            User::create($validate);
            return redirect('/login')->with('message', 'Registration Success');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) {
            }
            throw $e;
        }
    }

    public function home()
    {
        return view('users.home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
