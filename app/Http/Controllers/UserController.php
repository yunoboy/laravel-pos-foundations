<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'System Administrator', 'role' => 'Administrator'],
            ['username' => 'maria', 'full_name' => 'Maria Santos', 'role' => 'Cashier'],
            ['username' => 'juan', 'full_name' => 'Juan Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'angela', 'full_name' => 'Angela Reyes', 'role' => 'Supervisor'],
            ['username' => 'carlo', 'full_name' => 'Carlo Mendoza', 'role' => 'Cashier'],
        ];

        return view('users', compact('users'));
    }
}
