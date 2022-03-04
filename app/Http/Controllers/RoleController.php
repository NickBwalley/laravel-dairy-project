<?php

namespace App\Http\Controllers;

use App\Models\Role; 
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // public function all(){
    //     return view('roles.all');
    // }
    public function all(){
        //get all the cows data. 
        $roles = Role::all();
        // dd($cows); // dump the execution of the data and stop execution. 
        //show the view. 
        // passing the data to the view. 
        return view('roles.all', [
            'role' => $roles
        ]);
    }

    public function add(){
        return view('roles.add');
    }

    public function edit($id){

        $data = Role::find($id);
        return view('roles.edit', ['data'=>$data]);
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'role_name' => 'required|string',
            'role_desc' => 'required|string',
        ]);

        $role = new Role();

        $role->name = $request->get('role_name');
        $role->desc = $request->get('role_desc');
        $role->save();

        return redirect('roles');
    }

    public function update(Request $request){
        $data = Role::find($request->id);
        $data->name = $request->role_name;
        $data->desc = $request->role_desc;
        $data->save();
        
        return redirect('roles');
    }

    public function delete($id){
        Role::find($id)->delete();
        return redirect('roles');
    }

}
