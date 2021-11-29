<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function search (Request $request) {
        $query = $request->input('q');
        $users = User::search($query)->get();
        return response()->json($users);
    }
}
