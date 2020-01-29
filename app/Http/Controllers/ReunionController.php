<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reunion;
use App\Departement;
class ReunionController extends Controller
{
    public function index()
    {
        $re=Reunion::orderBy('date_reunion','asc')->get();
        return view('réunion/all',['re'=>$re,'date'=>date('Y,m,d H:i:s')]);
    }
    public function create()
    {   $dep=Departement::all();
        return view('réunion/create',['dep'=>$dep]);
    }
    public function store()
    {
        request()->validate([
            'date'=>'required',
            'time'=>'required',
            'sujet'=>'required',
            'dep'=>'required',
            'emplacement'=>'required'
        ]);
        $re = new Reunion;
        $time=request('time');
        $date =request('date');
        $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));
        $re->date_reunion=$combinedDT;
        if ($date<date('Y,m,d'))
        return redirect('reu/create')->with('msg','error date');
        $re->sujet=request('sujet');
        $re->departement_id=request('dep');
        $re->emplacement=request('emplacement');
        $re->save();
        return redirect('reu/all')->with('msg','create');

    }
    public function edit($id)
    {
        $re = Reunion::find($id);
        list($date,$time)=explode(" ",$re->date_reunion);
        $dep=Departement::all();
        return view('réunion/edit',['re'=>$re,'date'=>$date,'time'=>$time,'dep'=>$dep]);
    }
    public function update($id)
    {
        $re = Reunion::find($id);
        request()->validate([
            'date'=>'required',
            'time'=>'required',
            'sujet'=>'required',
            'emplacement'=>'required',
            'dep'=>'required',
        ]);
        $time=request('time');
        $date =request('date');
        $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));
        $re->date_reunion=$combinedDT;
        if ($date<date('Y,m,d'))
        {
        return view('réunion/edit',['re'=>$re,'date'=>$date,'time'=>$time,'msg'=>'erreur date','dep'=>$dep]);}
        else{
        $re->departement_id=request('dep');
        $re->sujet=request('sujet');
        $re->emplacement=request('emplacement');
        $re->save();
        return redirect('reu/all')->with('msg','update');}
    }
    public function delete($id)
    {
        $re=Reunion::find($id);
        $re->delete();
        return redirect('reu/all')->with('msg','delete');
    }

}
