<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateOfficialRequest;
use Inertia\Inertia;
use App\Models\Official;
use Illuminate\Support\Facades\Request;

class OfficialController extends Controller
{
    public function index(){

        return Inertia::render('Officials/Index', [
            'officials' => Official::query()
            ->when(Request::input('search'), function($query, $search) {
                $query->where('first_name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(),
            'filters' => Request::only(['search'])
        ]);
    }

    public function create(){

        return Inertia::render('Officials/Create');
    }

    public function store(ValidateOfficialRequest $request){

        $request->user()->officials()->create($request->validated());

        return redirect()->route('officials.index')->with('message', 'Barangay Official added succesfully.');
    }

    public function edit(Official $official){

        return Inertia::render('Officials/Edit', [
            'official' => $official
        ]);
    }

    public function update(ValidateOfficialRequest $request, Official $official){

        $official->update($request->validated());

        return redirect()->route('officials.index')->with('message', 'Barangay Official updated succesfully.');
    }

    public function show(Official $official){

        return Inertia::render('Officials/Show', [
            'official' => $official
        ]);
    }

    public function destroy(Official $official){

        $official->delete();

        return back()->with('message', 'Barangay official deleted succesfully.');
    }
}
