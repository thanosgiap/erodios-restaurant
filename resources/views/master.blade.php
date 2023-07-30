<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erodios Restaurant</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto+Slab:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="/home/thanos/Projects/erodios-restaurant/resources/sass/app.scss" , rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-center">
            <!-- Buttons on the right side of the navbar -->
            <div class="d-flex ml-auto vertical-center">
                <a href="#" class="btn btn-outline-secondary mx-2">Our Menu</a>
                <a href="#" class="btn btn-outline-secondary mx-2">About Us</a>
            </div>
        </div>
    </nav>


    <nav>
        <!-- Your navigation menu -->
    </nav>

    <main>
        <!-- Content from other views will be inserted here -->
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content -->
    </footer>

    <!-- Add your common JavaScript files here -->
</body>

</html>