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
            padding: 0;
            background-color: #f4f4f9;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .container {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-section,
        .plate-section {
            margin-bottom: 20px;
        }

        .form-section h3 {
            margin-bottom: 10px;
        }

        input,
        button {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .plate-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .plate-item form {
            display: inline;
        }

        .delete-btn {
            background-color: #FF4B4B;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Διαχείρηση Πιάτων</h1>
    </div>
    <div class="container">
        <!-- Add Plate Form -->
        <div class="form-section">
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
                <label for="category">Category:</label>
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
                <button type="submit">Δημιουργία</button>
            </form>
        </div>

        <!-- List Plates -->
        <div class="plate-section">
            <h3>Όλα τα πιάτα</h3>
            @foreach($plates as $plate)
            
            <div class="plate-item">

                <div>
                    <!-- Edit Plate -->
                    <form method="POST" action="{{ route('admin.plates.edit', $plate->id) }}">
                        @csrf
                        <input type="text" name="english_name" value="{{ $plate->english_name }}" placeholder="Τίτλος-Αγγλικά" required>
                        <input type="text" name="greek_name" value="{{ $plate->greek_name }}" placeholder="Τίτλος-Ελληνικά" required>
                        <input type="text" name="russian_name" value="{{ $plate->russian_name }}" placeholder="Τίτλος Ρώσικα" required>
                        <input type="text" name="english_description" value="{{ $plate->english_description }}" placeholder="Περιγραφή-Αγγλικά">
                        <input type="text" name="greek_description" value="{{ $plate->greek_description }}" placeholder="Περιγραφή-Ελληνικά">
                        <input type="text" name="russian_description" value="{{ $plate->russian_description }}" placeholder="Περιγραφή-Ρώσικα">
                        <input type="number" step="0.01" name="price" value="{{ $plate->price }}" placeholder="Τιμή" required>
                        <label for="category">Category:</label>
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
                        <button type="submit">Αποθήκευση</button>
                    </form>

                    <!-- Delete Plate -->
                    <form method="POST" action="{{ route('admin.plates.delete', $plate->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Διαγραφή</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>