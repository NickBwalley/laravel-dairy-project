<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function all(){
        return view('roles.all');
    }

    public function add(){
        return view('roles.add');
    }

    public function save(Request $req) {

        $validated = $request->validate([
            'role_name' => 'required|alpha',
            'role_desc' => 'required|alpha',
        ]);

        $role = new Role();

        $role->name = $request->get('role_name');
        $role->desc = $request->get('role_desc');
        $role->save();

        return redirect('roles');
    }

}
