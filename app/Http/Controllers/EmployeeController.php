<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeDashboard(Request $request) {
        if (!$request->session()->has('hr_user_id')) {
            return redirect('/login')
                ->with('message', 'Please log in to access the employee dashboard.')
                ->with('message_type', 'error');
        }

        return view('employee.employee-dashboard', [
            'name' => 'Employee Dashboard',
            'username' => $request->session()->get('hr_user_username'),
            'role' => $request->session()->get('hr_user_role'),
        ]);
    }
}
