<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
use App\ROLE;
class ROLEController extends Controller
{
    public function index()
    {
        $role=ROLE::all();
        return view('ROLE/all',['role'=>$role]);
    }
    public function create()
    {   $act = Activite::all();
        return view('ROLE/create',['act'=>$act]);
    }
    public function store()
    {
        request()->validate([
            'label'=>'required',
        ]);
        $role = new ROLE;
        $role->role=request('label');
        $role->actif=true;
        $role->save();
        $a=request('act');
       // dd($a);
       foreach($a as $a)
       {
           $act=Activite::find($a);
           $role->activites()->save($act);
       }
        //$role->activites()->saveMany($a);
        return redirect('ROLE/all');
    }
    public function edit($id)
    {   $act = Activite::all();
        $role=ROLE::find($id);
//dd($role->activites->toArray(),$role->activites->toArray(),$act->toArray());
        return view('ROLE/edit',['role'=>$role,"act"=>$act]);
    }
    public function update($id)
    {
        request()->validate([
            'role'=>'required',
        ]);
        $role=ROLE::find($id);
        $role->activites()->detach();
       // dd($a);
       $a=request('act');
       foreach($a as $a)
       {
           $act=Activite::find($a);
           $role->activites()->save($act);
       }
        //$role->activites()->saveMany($a);
        return redirect('ROLE/all');
    }
    public function delete($id)
    {
        $role=ROLE::find($id);
        $role->actif=false;
        $role->save();
        return redirect('ROLE/all');
    }
}
