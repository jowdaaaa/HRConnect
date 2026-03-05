<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(Request $request) {
        if (!$request->session()->has('hr_user_id') || strtolower($request->session()->get('hr_user_role')) !== 'admin') {
            return redirect('/login')
                ->with('message', 'Please log in as an admin to access the dashboard.')
                ->with('message_type', 'error');
        }

        return view('admin.admin-dashboard', [
            'name' => 'Admin Dashboard',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }
}
