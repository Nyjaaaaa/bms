<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ordinance;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\ValidateOrdinanceRequest;

class OrdinanceController extends Controller
{
    public function index(){
        
        return Inertia::render('Ordinances/Index', [
            'ordinances' => Ordinance::query()
            ->when(Request::input('search'), function($query, $search) {
                $query->where('number', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(),
            'filters' => Request::only(['search'])
        ]);
    }

    public function create(){

        return Inertia::render('Ordinances/Create');
    }

    public function store(ValidateOrdinanceRequest $request){

        $request->user()->ordinances()->create($request->validated());

        return redirect()->route('ordinances.index')->with('message', 'Ordinance added succesfully.');
    }

    public function edit(Ordinance $ordinance){

        return Inertia::render('Ordinances/Edit', [
            'ordinance' => $ordinance
        ]);
    }

    public function update(ValidateOrdinanceRequest $request, Ordinance $ordinance){

        $ordinance->update($request->validated());

        return redirect()->route('ordinances.index')->with('message', 'Ordinance updated succesfully.');
    }

    public function destroy(Ordinance $ordinance){
        
        $ordinance->delete();

        return redirect()->route('ordinances.index')->with('message', 'Ordinance deleted succesfully.');
    }
}
