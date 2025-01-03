<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Alice', 'age' => 20],
            ['id' => 2, 'name' => 'Bob', 'age' => 21],
            ['id' => 3, 'name' => 'Charlie', 'age' => 22],
        ];
        return view('users.index', ['users' => $users]);
    }
}
