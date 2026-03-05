<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\HRUsers;

class LoginController extends Controller
{
    public function login(){
        return view('login', ['name' => 'Login']);
    }

    public function loginProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $user = HRUsers::where('username', $validated['username'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()->withErrors(['username' => 'Invalid username or password.'])->onlyInput('username');
        }

        session([
            'hr_user_id' => $user->id,
            'hr_user_username' => $user->username,
            'hr_user_role' => $user->role,
        ]);

        $request->session()->put('last_activity', time());

        $role = strtolower($user->role);

        if ($role === 'admin') {
            return redirect('/admin-dashboard')
                ->with('message', 'Welcome back, Admin!')
                ->with('message_type', 'success');
        }

        return redirect('/employee-dashboard')
            ->with('message', 'Welcome back!')
            ->with('message_type', 'success');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successful!')->with('message_type', 'success');
    }
}
