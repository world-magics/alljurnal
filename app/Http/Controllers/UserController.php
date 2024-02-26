<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::query()->get();
        return view('dashboard.users.index', compact('users'));
    }

    public function create() {
        $roles = Role::query()->get();
        return view('dashboard.users.create', compact('roles'));
    }

    public function store(Request $request){
        
        try {
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => ['required', 'string', 'min:8', 'confirmed'],
            // ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            $user->syncRoles(array_keys($request->roles));
            return redirect()->route("admin.users.index")->with("status", "Yangi foydalanuvchi yaratildi!");
        } catch (Throwable $exception) {
            return back()->withInput()->with("status", $exception->getMessage());
        }
    }



}
