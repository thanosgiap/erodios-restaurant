@extends('master')

@section('title', 'Welcome')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Erodios</a>
        <!-- Add any additional navigation links here -->
    </div>
</nav>

<!-- Hero Section -->
<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Our Restaurant</h1>
        <p class="lead">Discover our delicious menu and enjoy a delightful dining experience.</p>
        <!-- Add a call-to-action button here to direct users to the menu or reservation page -->
    </div>
</section>

<!-- Content Section -->
<section class="content py-5">
    <div class="container">
        <!-- Add some content here about the restaurant, specials, or featured dishes -->
    </div>
</section>
@endsection