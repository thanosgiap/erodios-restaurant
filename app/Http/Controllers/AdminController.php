<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle admin login
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['name' => 'Invalid credentials.']);
    }


    // Admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }


    // Handle admin logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


    // Show plates list
    public function showPlates()
    {
        $plates = MenuItem::all();
        return view('admin.plates', compact('plates'));
    }

    // Add a new plate
    public function addPlate(Request $request)
    {
        $plate = new MenuItem();
        $plate->english_name = $request->input('english_name');
        $plate->greek_name = $request->input('greek_name');
        $plate->russian_name = $request->input('russian_name');
        $plate->english_description = $request->input('english_description');
        $plate->greek_description = $request->input('greek_description');
        $plate->russian_description = $request->input('russian_description');
        $plate->price = $request->input('price');
        $plate->category = $request->input('category');
        $plate->save();

        return redirect()->route('admin.plates');
    }

    // Edit an existing plate
    public function editPlate(Request $request, $id)
    {
        $plate = MenuItem::find($id);
        $plate->english_name = $request->input('english_name');
        $plate->greek_name = $request->input('greek_name');
        $plate->russian_name = $request->input('russian_name');
        $plate->english_description = $request->input('english_description');
        $plate->greek_description = $request->input('greek_description');
        $plate->russian_description = $request->input('russian_description');
        $plate->price = $request->input('price');
        $plate->category = $request->input('category');
        $plate->save();

        return redirect()->route('admin.plates');
    }

    // Delete a plate
    public function deletePlate($id)
    {
        $plate = MenuItem::find($id);
        $plate->delete();

        return redirect()->route('admin.plates');
    }
}
