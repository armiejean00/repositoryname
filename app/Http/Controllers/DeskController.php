<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desk;
use Illuminate\Validation\Rule;

class DeskController extends Controller
{
    //
    public function index(){
        $desks = Desk::all();
        return view('desks.index',['desks'=>$desks]);
    }

    public function create(){
        return view('desks.create');
    }

    public function store(Request $request){
       $request->validate([
        'desk_number' => [
            'required',
            'integer',
            'min:1',
            'max:50',
            Rule::unique(Desk::class, 'desk_number'),
        ],
    ]);

      $newDesk = Desk::create($request->all());

       return redirect(route('desks.index'));
    }

    public function edit(Desk $desks){
        return view('desks.edit',['desks'=>$desks]);
    }

    public function update(Desk $desks, Request $request){
         $data = $request->validate([
        
        'desk_number'=>'required|integer',
      
       ]);

       

       $desks->update($data);
       return redirect(route('desks.index'))->with('success','Desk Updated');
    }

    public function destroy(Desk $desks){
        $desks->delete();
        return redirect(route('desks.index'))->with('success','Desk Deleted!');
    
    }


    public function index1(){
        $desks = Desk::all();
        return view('desks.index',compact('desks'));
    }

    public function update1($deskId){
        $desk = Desk::find($deskId);

        if($desk){
            if($desk->isAvailable){
                $desk->isAvailable=0;
            }
            else{
                $desk->isAvailable=1;
            }
            $desk->save();
        }
        return back();
    }



    
}
