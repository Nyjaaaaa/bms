<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateResidentRequest;
use Inertia\Inertia;
use App\Models\Resident;
use Illuminate\Support\Facades\Request as SupportRequest;

class ResidentController extends Controller
{
    public function index(){

        return Inertia::render('Residents/Index', [
            'residents' => Resident::query()
            ->when(SupportRequest::input('search'), function($query, $search) {
                $query->where('first_name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(),
            'filters' => SupportRequest::only(['search'])
        ]);
    }

    public function create(){

        return Inertia::render('Residents/Create');
    }

    public function store(ValidateResidentRequest $request){

        $request->user()->residents()->create($request->validated());
        
        return redirect()->route('residents.index')->with('message', 'Resident Added Succesfully.');
    }

    public function edit(Resident $resident){

        return Inertia::render('Residents/Edit', [
            'resident' => $resident
        ]);
    }

    public function update(ValidateResidentRequest $request, Resident $resident){

        $resident->update($request->validated());

        return redirect()->route('residents.index')->with('message', 'Resident Updated Succesfully.');

        
    }

    public function show(Resident $resident){

        return Inertia::render('Residents/Show', [
            'resident' => $resident
        ]);
    }

    public function destroy(Resident $resident){

        $resident->delete();

        return redirect()->route('residents.index')->with('message', 'Resident deleted succesfully.');
    }
}
