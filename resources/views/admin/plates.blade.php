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

        .plate-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            /* 3 cards per row */
            gap: 20px;
            padding-top: 30px;

        }

        .plate-card {
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
            width: 100%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn {
            background-color: red;
            margin-top: 5px;
        }

        .create-btn {
            background-color: green;
            margin-top: 5px;
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

                <!-- Delete Form -->
                <form method="POST" action="{{ route('admin.plates.delete', $plate->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Διαγραφή</button>
                </form>
            </div>
            @endforeach
        </div>

    </div>
</body>

</html>