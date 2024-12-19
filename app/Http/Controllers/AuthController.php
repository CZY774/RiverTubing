<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        \Log::info('Login attempt', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Update last_login
            Auth::user()->update([
                'last_login' => now()
            ]);

            return response()->json(['success' => true]);
        }

        $user = User::where('username', $credentials['username'])->first();
        if (!$user) {
            \Log::info('User not found');
            return response()->json(['success' => false, 'message' => 'User not found'], 401);
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            \Log::info('Password incorrect');
            return response()->json(['success' => false, 'message' => 'Incorrect password'], 401);
        }

        return response()->json(['success' => false], 401);
    }

    // Method untuk mengedit user
    public function editUser($username, Request $request)
    {
        $user = User::where('username', $username)->first();
        
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }

        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        if (isset($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
        
        $user->username = $validatedData['username'];
        $user->save();

        return response()->json(['success' => true, 'message' => 'User updated successfully']);
    }

    // Method untuk menghapus user
    public function deleteUser($username)
    {
        $user = User::where('username', $username)->first();
        
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }

        $user->delete();
        return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}