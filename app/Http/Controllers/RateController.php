<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

/* USED FOR DEFINING, EDITING AND DELETING RATE COEFICIENTS  */

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/rate/index',[
            'rate' => Rate::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/rate/define',[
            'credit' => $this->credit,
            'lob' => $this->lob            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rate::create([
            'lob' => request('lob'),
            'county' => request('county'),
            'state'=>request('state'),
            'cov_a' => request('cov_a'),    
            'other_structures' => request('other_structures'),
            'loss_of_use' => request('loss_of_use'),
            'med_pay' => request('agent_phone_number'),
            'aop_ded' => request('aop_ded'),
            'construction_type' => request('construction_type'),
            'protection_class' => request('protection_class'),
            'new_purchase' => request('new_purchase'),    
            'prior_carrier' => request('prior_carrier'),
            'prior_carrier_name' => request('prior_carrier_name'),
            'prior_carrier_effective_date' => request('prior_carrier_effective_date')
        ]);     

        return redirect('/rate/index');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/rate/show',[
            'rate' => Rate::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/rate/edit',[
            'rate' => Rate::findOrFail($id),
            'credit' => $this->credit                       
        ]);
    }

    public function destroy($id) {

        $this->authorize('update', $id);

        $rate = Rate::find($id);

        $rate->delete();

        return redirect('/rate/index');
        
    }

    public function rate($id)
    {
        return view('/rate/prepare');
    }


}
