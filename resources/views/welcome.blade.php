<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/style.css'])
    <title>Erodios Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Welcome Screen -->
    <div class="welcome-screen">
        <div>
            <img src="{{ asset('images/erodios-logo.png') }}" alt="Logo" class="logo">
        </div>
        <div class="logo-container">
            <p id="welcome-message" class="welcome-message">Welcome to our digital menu!</p>
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Soups / Σούπες / Супы</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($soups as $soup)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $soup->english_name }}</h3>
                    <p>{{ $soup->english_description }}</p>
                    <h3>{{ $soup->greek_name }}</h3>
                    <p>{{ $soup->greek_description }}</p>
                    <h3>{{ $soup->russian_name }}</h3>
                    <p>{{ $soup->russian_description }}</p>
                </div>
                <span class="price">{{ $soup->price }}€</span>

            </div>
            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Ορεκτικά / Appetizers / Закуски</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($appetizers as $appetizer)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $appetizer->english_name }}</h3>
                    <p>{{ $appetizer->english_description }}</p>
                    <h3>{{ $appetizer->greek_name }}</h3>
                    <p>{{ $appetizer->greek_description }}</p>
                    <h3>{{ $appetizer->russian_name }}</h3>
                    <p>{{ $appetizer->russian_description }}</p>
                </div>
                <span class="price">{{ $appetizer->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Σαλάτες / Salads / Салаты</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($salads as $salad)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $salad->english_name }}</h3>
                    <p>{{ $salad->english_description }}</p>
                    <h3>{{ $salad->greek_name }}</h3>
                    <p>{{ $salad->greek_description }}</p>
                    <h3>{{ $salad->russian_name }}</h3>
                    <p>{{ $salad->russian_description }}</p>
                </div>
                <span class="price">{{ $salad->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Ελληνικές σπεσιαλιτέ / Greek Specialities / Греческие блюда</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($specialities as $speciality)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $speciality->english_name }}</h3>
                    <p>{{ $speciality->english_description }}</p>
                    <h3>{{ $speciality->greek_name }}</h3>
                    <p>{{ $speciality->greek_description }}</p>
                    <h3>{{ $speciality->russian_name }}</h3>
                    <p>{{ $speciality->russian_description }}</p>
                </div>
                <span class="price">{{ $speciality->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Ζυμαρικά / Pasta / Паста</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($pastas as $pasta)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $pasta->english_name }}</h3>
                    <p>{{ $pasta->english_description }}</p>
                    <h3>{{ $pasta->greek_name }}</h3>
                    <p>{{ $pasta->greek_description }}</p>
                    <h3>{{ $pasta->russian_name }}</h3>
                    <p>{{ $pasta->russian_description }}</p>
                </div>
                <span class="price">{{ $pasta->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Θαλλασινά / Seafood / Морепродукты</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($seafoods as $seafood)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $seafood->english_name }}</h3>
                    <p>{{ $seafood->english_description }}</p>
                    <h3>{{ $seafood->greek_name }}</h3>
                    <p>{{ $seafood->greek_description }}</p>
                    <h3>{{ $seafood->russian_name }}</h3>
                    <p>{{ $seafood->russian_description }}</p>
                </div>
                <span class="price">{{ $seafood->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>


    <div class="title-container">
        <h2 class="category-title">Όστρακα / Shellfish / Моллюски</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($shellfishes as $shellfish)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $shellfish->english_name }}</h3>
                    <p>{{ $shellfish->english_description }}</p>
                    <h3>{{ $shellfish->greek_name }}</h3>
                    <p>{{ $shellfish->greek_description }}</p>
                    <h3>{{ $shellfish->russian_name }}</h3>
                    <p>{{ $shellfish->russian_description }}</p>
                </div>
                <span class="price">{{ $shellfish->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>


    <div class="title-container">
        <h2 class="category-title">Ψαρικά (μερίδα) / Fish (portion) / Рыба (порция)</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($fishes as $fish)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $fish->english_name }}</h3>
                    <p>{{ $fish->english_description }}</p>
                    <h3>{{ $fish->greek_name }}</h3>
                    <p>{{ $fish->greek_description }}</p>
                    <h3>{{ $fish->russian_name }}</h3>
                    <p>{{ $fish->russian_description }}</p>
                </div>
                <span class="price">{{ $fish->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">O Chef προτείνει / The Chef suggests / Шеф-повар рекомендует</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($suggestions as $suggestion)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $suggestion->english_name }}</h3>
                    <p>{{ $suggestion->english_description }}</p>
                    <h3>{{ $suggestion->greek_name }}</h3>
                    <p>{{ $suggestion->greek_description }}</p>
                    <h3>{{ $suggestion->russian_name }}</h3>
                    <p>{{ $suggestion->russian_description }}</p>
                </div>
                <span class="price">{{ $suggestion->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Κρεατικά στη σχάρα / Grilled Meats / Мясные блюда на гриле</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($meats as $meat)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $meat->english_name }}</h3>
                    <p>{{ $meat->english_description }}</p>
                    <h3>{{ $meat->greek_name }}</h3>
                    <p>{{ $meat->greek_description }}</p>
                    <h3>{{ $meat->russian_name }}</h3>
                    <p>{{ $meat->russian_description }}</p>
                </div>
                <span class="price">{{ $meat->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Επιδόρπια / Desserts / Десерт</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($desserts as $dessert)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $dessert->english_name }}</h3>
                    <p>{{ $dessert->english_description }}</p>
                    <h3>{{ $dessert->greek_name }}</h3>
                    <p>{{ $dessert->greek_description }}</p>
                    <h3>{{ $dessert->russian_name }}</h3>
                    <p>{{ $dessert->russian_description }}</p>
                </div>
                <span class="price">{{ $dessert->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">Καφέδες / Coffees / Кофе</h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($coffees as $coffee)
            <div class="soup-item">
                <div class="item-details">
                    <h3>{{ $coffee->english_name }}</h3>
                    <p>{{ $coffee->english_description }}</p>
                    <h3>{{ $coffee->greek_name }}</h3>
                    <p>{{ $coffee->greek_description }}</p>
                    <h3>{{ $coffee->russian_name }}</h3>
                    <p>{{ $coffee->russian_description }}</p>
                </div>
                <span class="price">{{ $coffee->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="menu-category soups">
        <div class='disclaimer'>
            <div class="item-details">
                <p>Όλα τα φαγητά και οι σαλάτες παρασκευάζονται με ελληνικό ελαιόλαδο.</p>
                <p>Όλα τα τηγανιτά τηγανίζονται με σπορέλαιο.</p>
                <br>
                <p>Στις τιμές συμπεριλαμβάνονται όλες οι νόμιμες επιβαρύνσεις και ο ΦΠΑ.</p>
                <p>Το κατάστημα υπόκειται σε αγορανομικό έλεγχο ως προς τις τιμές.</p>
                <p>Ο καταναλωτής δεν έχει την υποχρέωση να πληρώσει εάν δε λάβει το νόμιμο παραστατικό στοιχείο (απόδειξη-τιμολόγιο)</p>
                <br>
                <p>Αγορανομικός Υπεύθυνος: Ιωάννης Γιαπουντζής</p>
            </div>

        </div>
    </div>







</body>

</html>


<script>
    // Detect when user scrolls
    const welcomeScreen = document.querySelector('.welcome-screen');

    // Set the threshold (scroll distance) for fading out the welcome screen
    const fadeOutThreshold = 300; // Adjust this value based on your design needs

    // Add a scroll listener
    window.addEventListener('scroll', () => {
        if (window.scrollY > fadeOutThreshold) {
            // Add the fade-out class when the scroll position passes the threshold
            welcomeScreen.classList.add('fade-out');
        } else {
            // Remove the fade-out class if scrolling back up
            welcomeScreen.classList.remove('fade-out');
        }
    })

    document.addEventListener('DOMContentLoaded', function() {
        const messages = [
            "Welcome to our digital menu!", // English
            "Καλώς ήρθατε στο ψηφιακό μας κατάλογο!" // Greek
        ];

        let currentIndex = 0;
        const textElement = document.getElementById("welcome-message");

        function changeText() {
            // Update the current index to the next message
            currentIndex = (currentIndex + 1) % messages.length;

            // Get the new message after updating the index
            const newMessage = messages[currentIndex];

            // Log the current index and new message for debugging
            console.log("Current Index:", currentIndex);
            console.log("New Message:", newMessage);

            // Fade out the text (set opacity to 0)
            textElement.style.opacity = 0;

            // After the fade-out transition is done, change the text
            setTimeout(function() {
                textElement.innerText = newMessage;

                // Fade the text back in (set opacity to 1)
                textElement.style.opacity = 1;
            }, 1000); // Match this timeout to the CSS transition duration
        }

        // Change the text every 5 seconds
        setInterval(changeText, 5000);
    });


    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('.header');

        // Function to show the header when scrolling starts
        function showHeaderOnScroll() {
            if (window.scrollY > 0) {
                // Make the header visible when scrolling starts
                header.style.visibility = 'visible'; // or header.style.opacity = '1';
            }
        }

        // Listen for scroll events
        window.addEventListener('scroll', showHeaderOnScroll);
    });
</script>