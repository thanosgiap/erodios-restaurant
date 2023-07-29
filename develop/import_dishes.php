<?php
use App\Models\Dish;

$stream = fopen('develop/ErodiosMenu.csv', 'r');


while (($row = fgetcsv($stream, 1000, ',')) !== false){

    $name = isset($row[0]) ? trim($row[0]) : null;
    $description = isset($row[1]) ? trim($row[1]) : '';
    $ingredients = isset($row[2]) ? trim($row[2]) : '';
    $type = isset($row[3]) ? trim($row[3]) : '';
    $price = isset($row[4]) ? (float) $row[4] : null;
    $recommended = isset($row[5]) ? (int) $row[5] : 0;

    Dish::create([
        'name' => $name,
        'description' => $description,
        'ingredients' => $ingredients,
        'type' => $type,
        'price' => $price,
        'recommended' => $recommended
    ]);
}

