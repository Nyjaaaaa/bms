<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidateResidentRequest;
use Illuminate\Support\Facades\Request as SupportRequest;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Users/Index', [
            'users' => User::query()
            ->when(SupportRequest::input('search'), function($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(),
            'filters' => SupportRequest::only(['search'])
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Users/Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('message', 'User added successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        return Inertia::render('Admin/Users/Edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, ValidateResidentRequest $request)
    {
        $user->update($request->validated());

        return redirect()->route('admin.users.index')->with('message', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect()->route('admin.users.index')->with('message', 'User deleted successfully.');
    }
}
