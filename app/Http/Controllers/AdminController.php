<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function requireAdmin(Request $request)
    {
        if (!$request->session()->has('hr_user_id') || strtolower($request->session()->get('hr_user_role')) !== 'admin') {
            return redirect('/login')
                ->with('message', 'Please log in as an admin to access the dashboard.')
                ->with('message_type', 'error');
        }

        return null;
    }

    public function adminDashboard(Request $request) {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.admin-dashboard', [
            'name' => 'Admin Dashboard',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }

    public function census(Request $request)
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.census', [
            'name' => 'Admin - Census',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }

    public function tasks(Request $request)
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.tasks', [
            'name' => 'Admin - Tasks',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }

    public function messages(Request $request)
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.messages', [
            'name' => 'Admin - Messages',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }

    public function events(Request $request)
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.events', [
            'name' => 'Admin - Events',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }

    public function accounts(Request $request)
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return view('admin.accounts', [
            'name' => 'Admin - Manage Accounts',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }
}
