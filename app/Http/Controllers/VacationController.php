<?php

namespace App\Http\Controllers;

use App\Vacation;
use App\Location;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Putovanja=vacation::with('locations')->get();
        $Lokacije=location::get();
        return view('vacation', 
            [
                'vacations' => $Putovanja,
                'locations'=> $Lokacije,
                'AppTitle' => 'Vacations'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Putovanja=vacation::get();
        $Lokacije=location::get();
        return view('create', 
            [
                'vacations' => $Putovanja,
                'locations'=> $Lokacije,
                'AppTitle' => 'Vacations' 
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
        /*
        $request->validate( 
        [ 
            'naziv' => 'alpha|required', 
            'cijena' => 'alpha_num|required', 
            'datumPolazak' => 'date|required',
            'datumPovratak'=> 'date|required',
            'raspolozivost' => 'required',
            
        
        ], 
        [ 
            'naziv.alpha' => 'Only letters are available', 
            'naziv.required' => 'Country is required',
            'naziv.required' => 'Title is required',
            'cijena.alpha_num' => 'Price can be only letters and numbers.',
            'cijena.required' => 'Price is required',
            'datumPolazak.date' => 'Date of departure must be a valid date format',
            'datumPolazak.required' => 'Date of departure cannot be empty',
            'datumPovratak.date' => 'Date of arrival must be a valid date format',
            'datumPovratak.required' => 'Date of arrival cannot be empty',
            'raspolozivost.required' => 'Availability field cannot be empty',
            
        ] 
        );
        */

        $Putovanja =new vacation;
        $Putovanja->naziv = $request->all()['naziv'];
        $Putovanja->cijena = $request->all()['cijena'];
        $Putovanja->datumPolazak = $request->all()['datumPolazak'];
        $Putovanja->datumPovratak = $request->all()['datumPovratak'];
        $Putovanja->raspolozivost = $request->all()['raspolozivost'];
        $Putovanja->lokacijaId = $request->all()['lokacijaId'];


        $Putovanja->save();

        return redirect('create')->with('message', 'Vacation saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function show(Vacation $vacation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacation $vacation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacation $vacation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacation $vacation)
    {
        //
    }
}
