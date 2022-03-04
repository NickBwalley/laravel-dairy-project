<?php

namespace App\Http\Controllers;

use App\Models\Produce; 
use Illuminate\Http\Request;

class ProduceController extends Controller
{
    // public function all(){
    //     return view('Produces.all');
    // }
    public function all(){
        //get all the cows data. 
        $produces = Produce::all();
        // dd($cows); // dump the execution of the data and stop execution. 
        //show the view. 
        // passing the data to the view. 
        return view('produce.all', [
            'produce' => $produces
        ]);
    }

    public function add(){
        return view('produce.add');
    }

    public function edit($id){

        $data = Produce::find($id);
        return view('produce.edit', ['data'=>$data]);
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'produce_date' => 'required|date',
            'user_id' => 'required|integer',
        ]);

        $produce = new Produce();

        $produce->amount = $request->get('amount');
        $produce->produce_date = $request->get('produce_date');
        $produce->user_id = $request->get('user_id');
        $produce->save();

        return redirect('produces');
    }

    public function update(Request $request){
        $data = Produce::find($request->id);
        $data->amount = $request->amount;
        $data->produce_date = $request->produce_date;
        $data->user_id = $request->user_id;
        $data->save();
        
        return redirect('produces');
    }

    public function delete($id){
        Produce::find($id)->delete();
        return redirect('produces');
    }

}
