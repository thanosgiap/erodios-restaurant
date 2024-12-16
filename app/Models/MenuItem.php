<?php

// app/Models/MenuItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Define which fields are mass assignable
    protected $fillable = [
        'english_name',
        'greek_name',
        'russian_name', 
        'english_description',
        'greek_description',
        'russian_description', 
        'price',
        'category'
    ];
}
