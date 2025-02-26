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
    <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="language-switcher">
        <button class="lang-btn" data-lang="gr">
            <img src="{{ asset('images/greece.png') }}" alt="Greek-flag" width="45">
        </button>
        <button class="lang-btn" data-lang="en">
            <img src="{{ asset('images/united-kingdom.png') }}" alt="Greek-flag" width="45">
        </button>
        <button class="lang-btn" data-lang="ru">
            <img src="{{ asset('images/russia.png') }}" alt="Greek-flag" width="45">
        </button>
    </div>

    <div class="dropdown">
        <button class="dropbtn" id="dropdown-btn" onclick="toggleDropdown()">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>
        <div class="dropdown-content" id="dropdown-menu">

        </div>
    </div>
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
        <h2 class="category-title">
            <span class="lang-gr">Σούπες</span>
            <span class="lang-en hidden">Soups</span>
            <span class="lang-ru hidden">Супы</span>
        </h2>
    </div>

    <div class="menu-category soups">
        <div class="soup-list">
            @foreach($soups as $soup)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class="lang-gr">{{ $soup->greek_name }}</h3>
                    <p class="lang-gr">{{ $soup->greek_description }}</p>

                    <h3 class="lang-en hidden">{{ $soup->english_name }}</h3>
                    <p class="lang-en hidden">{{ $soup->english_description }}</p>

                    <h3 class="lang-ru hidden">{{ $soup->russian_name }}</h3>
                    <p class="lang-ru hidden">{{ $soup->russian_description }}</p>
                </div>
                <span class="price">{{ $soup->price }}€</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-gr">Ορεκτικά</span>
            <span class="lang-en hidden">Appetizers</span>
            <span class="lang-ru hidden">Закуски для Компании</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($appetizers as $appetizer)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-gr'>{{ $appetizer->greek_name }}</h3>
                    <p class='lang-gr'>{{ $appetizer->greek_description }}</p>

                    <h3 class='lang-en hidden'>{{ $appetizer->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $appetizer->english_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $appetizer->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $appetizer->russian_description }}</p>
                </div>
                <span class="price">{{ $appetizer->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en hidden">Salads</span>
            <span class="lang-gr">Σαλάτες</span>
            <span class="lang-ru hidden">Салаты</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($salads as $salad)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en'>{{ $salad->english_name }}</h3>
                    <p class='lang-en'>{{ $salad->english_description }}</p>

                    <h3 class='lang-gr hidden'>{{ $salad->greek_name }}</h3>
                    <p class='lang-gr hidden'>{{ $salad->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $salad->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $salad->russian_description }}</p>
                </div>
                <span class="price">{{ $salad->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Greek Specialities</span>
            <span class="lang-gr hidden">Ελληνικές σπεσιαλιτέ</span>
            <span class="lang-ru hidden">Греческие блюда</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($specialities as $speciality)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $speciality->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $speciality->english_description }}</p>

                    <h3 class='lang-gr'>{{ $speciality->greek_name }}</h3>
                    <p class='lang-gr'>{{ $speciality->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $speciality->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $speciality->russian_description }}</p>
                </div>
                <span class="price">{{ $speciality->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Pasta</span>
            <span class="lang-gr hidden">Ζυμαρικά</span>
            <span class="lang-ru hidden">Паста</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($pastas as $pasta)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $pasta->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $pasta->english_description }}</p>

                    <h3 class='lang-gr'>{{ $pasta->greek_name }}</h3>
                    <p class='lang-gr'>{{ $pasta->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $pasta->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $pasta->russian_description }}</p>
                </div>
                <span class="price">{{ $pasta->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Seafood</span>
            <span class="lang-gr hidden">Θαλασσινά</span>
            <span class="lang-ru hidden">Морепродукты</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($seafoods as $seafood)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $seafood->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $seafood->english_description }}</p>

                    <h3 class='lang-gr'>{{ $seafood->greek_name }}</h3>
                    <p class='lang-gr'>{{ $seafood->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $seafood->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $seafood->russian_description }}</p>
                </div>
                <span class="price">{{ $seafood->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>


    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Shellfish</span>
            <span class="lang-gr hidden">Όστρακα</span>
            <span class="lang-ru hidden">Моллюски</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($shellfishes as $shellfish)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $shellfish->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $shellfish->english_description }}</p>

                    <h3 class='lang-gr'>{{ $shellfish->greek_name }}</h3>
                    <p class='lang-gr'>{{ $shellfish->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $shellfish->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $shellfish->russian_description }}</p>
                </div>
                <span class="price">{{ $shellfish->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>


    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Fish (portion)</span>
            <span class="lang-gr hidden">Ψάρια (μερίδα)</span>
            <span class="lang-ru hidden">Рыба (порция)</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($fishes as $fish)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $fish->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $fish->english_description }}</p>

                    <h3 class='lang-gr'>{{ $fish->greek_name }}</h3>
                    <p class='lang-gr'>{{ $fish->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $fish->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $fish->russian_description }}</p>
                </div>
                <span class="price">{{ $fish->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">The Chef suggests...</span>
            <span class="lang-gr hidden">Ο Σεφ προτείνει...</span>
            <span class="lang-ru hidden">Шеф-повар рекомендует...</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($suggestions as $suggestion)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $suggestion->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $suggestion->english_description }}</p>

                    <h3 class='lang-gr'>{{ $suggestion->greek_name }}</h3>
                    <p class='lang-gr'>{{ $suggestion->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $suggestion->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $suggestion->russian_description }}</p>
                </div>
                <span class="price">{{ $suggestion->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Grilled Meats</span>
            <span class="lang-gr hidden">Κρεατικά στην σχάρα</span>
            <span class="lang-ru hidden">Мясные блюда на гриле</span>
        </h2>
    </div>

    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($meats as $meat)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $meat->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $meat->english_description }}</p>

                    <h3 class='lang-gr'>{{ $meat->greek_name }}</h3>
                    <p class='lang-gr'>{{ $meat->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $meat->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $meat->russian_description }}</p>
                </div>
                <span class="price">{{ $meat->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Desserts</span>
            <span class="lang-gr hidden">Επιδόρπια</span>
            <span class="lang-ru hidden">Десерт</span>
        </h2>
    </div>


    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($desserts as $dessert)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $dessert->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $dessert->english_description }}</p>

                    <h3 class='lang-gr'>{{ $dessert->greek_name }}</h3>
                    <p class='lang-gr'>{{ $dessert->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $dessert->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $dessert->russian_description }}</p>
                </div>
                <span class="price">{{ $dessert->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="title-container">
        <h2 class="category-title">
            <span class="lang-en">Coffees</span>
            <span class="lang-gr hidden">Καφέδες</span>
            <span class="lang-ru hidden">Кофе</span>
        </h2>
    </div>
    <div class="menu-category soups">

        <div class="soup-list">
            @foreach($coffees as $coffee)
            <div class="soup-item">
                <div class="item-details">
                    <h3 class='lang-en hidden'>{{ $coffee->english_name }}</h3>
                    <p class='lang-en hidden'>{{ $coffee->english_description }}</p>

                    <h3 class='lang-gr'>{{ $coffee->greek_name }}</h3>
                    <p class='lang-gr'>{{ $coffee->greek_description }}</p>

                    <h3 class='lang-ru hidden'>{{ $coffee->russian_name }}</h3>
                    <p class='lang-ru hidden'>{{ $coffee->russian_description }}</p>
                </div>
                <span class="price">{{ $coffee->price }}€</span>

            </div>

            @endforeach
        </div>
    </div>

    <div class="menu-category soups">
        <div class='disclaimer'>
            <div class="item-details">
                <p class='lang-gr lang-en lang-ru'>Όλα τα φαγητά και οι σαλάτες παρασκευάζονται με ελληνικό ελαιόλαδο.</p>
                <p class='lang-gr lang-en lang-ru'>Όλα τα τηγανιτά τηγανίζονται με σπορέλαιο.</p>
                <br>
                <p class='lang-gr lang-en lang-ru'>Στις τιμές συμπεριλαμβάνονται όλες οι νόμιμες επιβαρύνσεις και ο ΦΠΑ.</p>
                <p class='lang-gr lang-en lang-ru'>Το κατάστημα υπόκειται σε αγορανομικό έλεγχο ως προς τις τιμές.</p>
                <p class='lang-gr lang-en lang-ru'>Ο καταναλωτής δεν έχει την υποχρέωση να πληρώσει εάν δε λάβει το νόμιμο παραστατικό στοιχείο (απόδειξη-τιμολόγιο)</p>
                <br>
                <p class='lang-gr lang-en lang-ru'>Αγορανομικός Υπεύθυνος: Ιωάννης Γιαπουντζής</p>
            </div>

        </div>
    </div>







</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".lang-btn");

        function switchLanguage(selectedLang, shouldReload = true) {
            // Hide all language-related content
            document.querySelectorAll(".item-details h3, .item-details p, .category-title span").forEach(el => {
                el.classList.add("hidden");
            });

            // Show only the selected language
            document.querySelectorAll(".lang-" + selectedLang).forEach(el => {
                el.classList.remove("hidden");
            });

            // Store selected language in local storage
            localStorage.setItem("selectedLanguage", selectedLang);

            // Reload the page only when the user actively changes the language
            if (shouldReload) {
                location.reload();
            }
        }

        // Get the saved language, default to Greek ("gr") if none is found
        const savedLanguage = localStorage.getItem("selectedLanguage") || "gr";

        // Apply the saved language **without** reloading
        switchLanguage(savedLanguage, false);

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                let selectedLang = this.getAttribute("data-lang");

                // Prevent unnecessary reload if the same language is selected
                if (selectedLang !== savedLanguage) {
                    switchLanguage(selectedLang);
                }
            });
        });
    });


    function toggleDropdown() {
        let menu = document.getElementById("dropdown-menu");
        menu.classList.toggle("show");
    }

    // Close dropdown when clicking outside
    document.addEventListener("click", function(event) {
        let dropdown = document.querySelector(".dropdown");
        if (!dropdown.contains(event.target)) {
            document.getElementById("dropdown-menu").classList.remove("show");
        }
    });

    let button = document.getElementById("dropdown-btn");
    let fadeTimeout;

    window.addEventListener("scroll", function() {
        button.style.opacity = "0.1"; // Fade out when scrolling

        // Clear previous timeout and reset fade-in after scrolling stops
        clearTimeout(fadeTimeout);
        fadeTimeout = setTimeout(() => {
            button.style.opacity = "1"; // Fade back in
        }, 500); // Delay after scrolling stops
    });

    document.addEventListener("DOMContentLoaded", function() {
        let categories = document.querySelectorAll(".category-title");
        let dropdownMenu = document.getElementById("dropdown-menu");

        categories.forEach((category, index) => {
            let categoryId = "category-" + index;
            category.id = categoryId;

            let menuItem = document.createElement("a");
            menuItem.href = "#" + categoryId;
            menuItem.innerText = category.innerText;

            menuItem.addEventListener("click", function(event) {
                event.preventDefault();
                document.getElementById(categoryId).scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
                document.getElementById("dropdown-menu").classList.remove("show");
            });

            dropdownMenu.appendChild(menuItem);
        });
    });

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