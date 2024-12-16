<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuController extends Controller
{
    public function showMenu() {
        // Get soups from the database
        $soups = MenuItem::where('category', 'soup')->get();
        $appetizers = MenuItem::where('category', 'appetizer')->get();
        $salads = MenuItem::where('category', 'salad')->get();
        $specialities = MenuItem::where('category', 'speciality')->get();
        $pastas = MenuItem::where('category', 'pasta')->get();
        $fishes = MenuItem::where('category', 'fish')->get();
        $shellfishes = MenuItem::where('category', 'shellfish')->get();
        $seafoods = MenuItem::where('category', 'seafood')->get();
        $suggestions = MenuItem::where('category', 'suggestion')->get();
        $meats = MenuItem::where('category', 'meat')->get();
        $desserts = MenuItem::where('category', 'dessert')->get();
        $coffees = MenuItem::where('category', 'coffee')->get();

        return view('welcome', compact('soups', 'appetizers', 'salads', 'specialities', 'pastas', 'fishes', 'shellfishes', 'seafoods', 'suggestions', 'meats', 'desserts', 'coffees'));
    }
}
