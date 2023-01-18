<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Activity;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\ValidateActivityRequest;

class ActivityController extends Controller
{
    public function index(){

        return Inertia::render('Activities/Index', [
            'activities' => Activity::query()
            ->when(Request::input('search'), function($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(),
            'filters' => Request::only(['search'])
        ]);
    }

    public function create(){

        return Inertia::render('Activities/Create');
    }

    public function store(ValidateActivityRequest $request){

        $request->user()->activities()->create($request->validated());

        return redirect()->route('activities.index')->with('message', 'Activity added succesfully.');
    }

    public function edit(Activity $activity){

        return Inertia::render('Activities/Edit', [
            'activity' => $activity
        ]);
    }

    public function update(ValidateActivityRequest $request, Activity $activity){

        $activity->update($request->validated());

        return redirect()->route('activities.index')->with('message', 'Resident updated succesfully.');
    }

    public function destroy(Activity $activity){
        
        $activity->delete();
        
        return redirect()->route('activities.index')->with('message', 'Activity deleted succesfully.');
    }
}
