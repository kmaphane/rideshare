<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|min:10',
            'name' => 'required|string',
        ]);

        $user = User::firstOrCreate([
            'phone' => $request->phone,
            'name' => $request->name
        ]);
    }
}
