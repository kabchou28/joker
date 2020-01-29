<?php

namespace App\Http\Controllers;
use App\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{public function index()
    {
        $dep=Departement::all();
        return view('departements/all',['dep'=>$dep]);
    }
    public function create()
    {
        return view('departements/create');
    }
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        request()->validate([
            'name'=>'required',
            'type'=>'required',
            'description'=>'required',
        ]);
        $dep = new Departement;
        $dep->name=request('name');
        $dep->type=request('type');
        $dep->description=request('description');
        $dep->save();
        return redirect('dep/all')->with('msg','create');
    }
    public function edit($id)
    {
        $dep = Departement::find($id);
        return view('departements/edit',['dep'=>$dep]);
    }
    public function update($id)
    {
        $dep = Departement::find($id);
        $dep->name=request('name');
        $dep->type=request('type');
        $dep->description=request('description');
        $dep->save();
        return redirect('dep/all')->with('msg','update');
    }
    public function delete($id)
    {
        $dep=Departement::find($id);
        $dep->delete();
        return redirect('dep/all')->with('msg','delete');
    }
}
