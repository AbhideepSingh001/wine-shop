<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class RoleController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.roles.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.roles.edit', compact('user'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);

        $user->role = request('role');

        $user->save();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role updated successfully');
    }
}