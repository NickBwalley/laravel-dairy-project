<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function all(){
        //get all the cows data. 
        $users = User::all();
        // dd($cows); // dump the execution of the data and stop execution. 
        //show the view. 
        // passing the data to the view. 
        return view('users.all', [
            'users' => $users
        ]);
    }

    public function add(){
        return view('users.add');
    }

    public function edit($id){

        $data = User::find($id);
        return view('users.edit', ['data'=>$data]);
    }

    public function update(Request $request){
        $data = User::find($request->id);
        $data->national_id = $request->national_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->birth_date = $request->birth_date;
        $data->roll_id = $request->roll_id;
        $data->save();
        
        return redirect('users');
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'national_id' => 'required',
            'name' => 'required|alpha',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'birth_date' => 'required|date',
            'roll_id' => 'required|integer',
        ]);

        $user = new User();

        $user->national_id = $request->get('national_id');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->birth_date = $request->get('birth_date');
        $user->roll_id = $request->get('roll_id');
        $user->save();

        return redirect('users');
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect('users');
    }


}
