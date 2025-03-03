<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Διαχείρηση Καταλόγου</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 50px;
            background-color: #dad0c0;
        }

        .header {
            text-align: center;
        }

        .plate-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            /* 3 cards per row */
            gap: 20px;
            padding-top: 30px;

        }

        .plate-card {
            position: relative;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .plate-card h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color: #333;
        }

        .plate-card input,
        .plate-card select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .plate-card button {
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn {
            background-color: red;
            color: white;
            padding: 0;
            /* Remove padding */
            border: none;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            top: 5px;
            right: 5px;
            width: 35px;
            /* Set a fixed width for square shape */
            height: 35px;
            /* Set a fixed height for square shape */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .create-btn {
            width: 100%;
            background-color: green;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .toggle-btn {
            width: 100%;
            transition: background-color 0.3s ease;
        }

        /* Default state when hidden (Show button - Blue) */
        .toggle-btn[data-visible="false"] {
            background-color: blue;
            color: white;
        }

        
        .toggle-btn[data-visible="true"] {
            background-color: orange;
            color: white;
        }



        /* Responsive grid for smaller screens */
        @media (max-width: 768px) {
            .plate-grid {
                grid-template-columns: repeat(2, 1fr);
                /* 2 cards per row */
            }
        }

        @media (max-width: 480px) {
            .plate-grid {
                grid-template-columns: 1fr;
                /* 1 card per row */
            }
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Διαχείρηση Πιάτων</h1>
    </div>
    <div class="container">
        <!-- Add Plate Form -->
        <div class="plate-card">
            <h3>Προσθήκη Πιάτου</h3>
            <form method="POST" action="{{ route('admin.plates.add') }}">
                @csrf
                <input type="text" name="english_name" placeholder="Τίτλος-Αγγλικά" required>
                <input type="text" name="greek_name" placeholder="Τίτλος-Ελληνικά" required>
                <input type="text" name="russian_name" placeholder="Τίτλος Ρώσικα" required>
                <input type="text" name="english_description" placeholder="Περιγραφή-Αγγλικά">
                <input type="text" name="greek_description" placeholder="Περιγραφή-Ελληνικά">
                <input type="text" name="russian_description" placeholder="Περιγραφή-Ρώσικα">
                <input type="number" step="0.01" name="price" placeholder="Τιμή" required>
                <label for="category">Κατηγορία:</label>
                <select name="category" id="category">
                    <option value="soup" {{ old('category', $menuItem->category ?? '') == 'soup' ? 'selected' : '' }}>Σούπα</option>
                    <option value="appetizer" {{ old('category', $menuItem->category ?? '') == 'appetizer' ? 'selected' : '' }}>Ορεκτικό</option>
                    <option value="salad" {{ old('category', $menuItem->category ?? '') == 'salad' ? 'selected' : '' }}>Σαλάτα</option>
                    <option value="speciality" {{ old('category', $menuItem->category ?? '') == 'speciality' ? 'selected' : '' }}>Μαγειρευτό</option>
                    <option value="pasta" {{ old('category', $menuItem->category ?? '') == 'pasta' ? 'selected' : '' }}>Μακαρονάδα</option>
                    <option value="seafood" {{ old('category', $menuItem->category ?? '') == 'seafood' ? 'selected' : '' }}>Θαλλασινό</option>
                    <option value="shellfish" {{ old('category', $menuItem->category ?? '') == 'shellfish' ? 'selected' : '' }}>Όστρακα</option>
                    <option value="fish" {{ old('category', $menuItem->category ?? '') == 'fish' ? 'selected' : '' }}>Ψαρικό</option>
                    <option value="suggestion" {{ old('category', $menuItem->category ?? '') == 'suggestion' ? 'selected' : '' }}>Σπέσιαλ</option>
                    <option value="meat" {{ old('category', $menuItem->category ?? '') == 'meat' ? 'selected' : '' }}>Κρεατικό</option>
                    <option value="dessert" {{ old('category', $menuItem->category ?? '') == 'dessert' ? 'selected' : '' }}>Επιδόρπιο</option>
                    <option value="coffee" {{ old('category', $menuItem->category ?? '') == 'coffee' ? 'selected' : '' }}>Καφές</option>
                </select>
                <button type="submit" class="create-btn">Δημιουργία</button>
            </form>
        </div>

        <!-- List Plates -->


        <div class="plate-grid">
            @foreach ($plates as $plate)
            <div class="plate-card">
                <h3>{{ $plate->greek_name }}</h3>
                <p><strong>Τιμή:</strong> {{ $plate->price }}€</p>
                <p><strong>Κατηγορία:</strong> {{ ($plate->category) }}</p>

                <!-- Edit Form -->
                <form method="POST" action="{{ route('admin.plates.edit', $plate->id) }}">
                    @csrf
                    <input type="text" name="english_name" value="{{ $plate->english_name }}" placeholder="Τίτλος-Αγγλικά" required>
                    <input type="text" name="greek_name" value="{{ $plate->greek_name }}" placeholder="Τίτλος-Ελληνικά" required>
                    <input type="text" name="russian_name" value="{{ $plate->russian_name }}" placeholder="Τίτλος-Ρώσικα" required>
                    <input type="text" name="english_description" value="{{ $plate->english_description }}" placeholder="Περιγραφή-Αγγλικά">
                    <input type="text" name="greek_description" value="{{ $plate->greek_description }}" placeholder="Περιγραφή-Ελληνικά">
                    <input type="text" name="russian_description" value="{{ $plate->russian_description }}" placeholder="Περιγραφή-Ρώσικα">
                    <input type="number" step="0.01" name="price" value="{{ $plate->price }}" placeholder="Τιμή" required>
                    <label for="category">Κατηγορία:</label>
                    <select name="category" id="category">
                        <option value="soup" {{ $plate->category == 'soup' ? 'selected' : '' }}>Σούπα</option>
                        <option value="appetizer" {{ $plate->category == 'appetizer' ? 'selected' : '' }}>Ορεκτικό</option>
                        <option value="speciality" {{ $plate->category == 'speciality' ? 'selected' : '' }}>Μαγειρευτό</option>
                        <option value="salad" {{ $plate->category == 'salad' ? 'selected' : '' }}>Σαλάτα</option>
                        <option value="pasta" {{ $plate->category == 'pasta' ? 'selected' : '' }}>Μακαρονάδα</option>
                        <option value="seafood" {{ $plate->category == 'seafood' ? 'selected' : '' }}>Θαλλασινό</option>
                        <option value="shellfish" {{ $plate->category == 'shellfish' ? 'selected' : '' }}>Όστρακα</option>
                        <option value="fish" {{ $plate->category == 'fish' ? 'selected' : '' }}>Ψαρικό</option>
                        <option value="suggestion" {{ $plate->category == 'suggestion' ? 'selected' : '' }}>Σπέσιαλ</option>
                        <option value="meat" {{ $plate->category == 'meat' ? 'selected' : '' }}>Κρεατικό</option>
                        <option value="dessert" {{ $plate->category == 'dessert' ? 'selected' : '' }}>Επιδόρπιο</option>
                        <option value="coffee" {{ $plate->category == 'coffee' ? 'selected' : '' }}>Καφές</option>
                    </select>

                    <button type="submit" class="create-btn">Αποθήκευση</button>
                </form>
                <form action="{{ route('admin.plates.toggle', $plate->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="toggle-btn" data-visible="{{ $plate->is_visible ? 'true' : 'false' }}">
                        {{ $plate->is_visible ? 'Απόκρυψη' : 'Επανεμφάνιση' }}
                    </button>
                </form>

                <!-- Delete Form -->
                <form method="POST" action="{{ route('admin.plates.delete', $plate->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="25" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>

                </form>
            </div>
            @endforeach
        </div>

    </div>
</body>

</html>