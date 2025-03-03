<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuController extends Controller
{
    public function showMenu() {
        // Fetch only visible menu items
        $soups = MenuItem::where('category', 'soup')->where('is_visible', true)->get();
        $appetizers = MenuItem::where('category', 'appetizer')->where('is_visible', true)->get();
        $salads = MenuItem::where('category', 'salad')->where('is_visible', true)->get();
        $specialities = MenuItem::where('category', 'speciality')->where('is_visible', true)->get();
        $pastas = MenuItem::where('category', 'pasta')->where('is_visible', true)->get();
        $fishes = MenuItem::where('category', 'fish')->where('is_visible', true)->get();
        $shellfishes = MenuItem::where('category', 'shellfish')->where('is_visible', true)->get();
        $seafoods = MenuItem::where('category', 'seafood')->where('is_visible', true)->get();
        $suggestions = MenuItem::where('category', 'suggestion')->where('is_visible', true)->get();
        $meats = MenuItem::where('category', 'meat')->where('is_visible', true)->get();
        $desserts = MenuItem::where('category', 'dessert')->where('is_visible', true)->get();
        $coffees = MenuItem::where('category', 'coffee')->where('is_visible', true)->get();

        return view('welcome', compact(
            'soups', 'appetizers', 'salads', 'specialities', 
            'pastas', 'fishes', 'shellfishes', 'seafoods', 
            'suggestions', 'meats', 'desserts', 'coffees'
        ));
    }
}

