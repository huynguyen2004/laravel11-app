<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function show($id)
    {
        $role = Role::with('users')->findOrFail($id);

        return view('role.show', compact('role'));
    }
}
