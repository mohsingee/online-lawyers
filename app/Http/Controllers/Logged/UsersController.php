<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
class UsersController extends Controller
{
    public function index(){
        $users = User::where('role', '!=', 'superadmin')->latest()->get();
        return view('logged.pages.users.index', compact('users'));
    }

    public function create(){
        return view('logged.pages.users.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:creator,user,lawyer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User created successfully!'
        ]);
    }

    public function edit(User $user){
        return view('logged.pages.users.edit', compact('user'));
    }

    public function update(Request $request, User $user){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'nullable|min:8|confirmed',
            'role' => 'required|in:creator,user,lawyer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return response()->json([
            'message' => 'User updated successfully!'
        ]);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully!');
    }
}
