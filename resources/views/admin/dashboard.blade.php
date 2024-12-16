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
            background-color: #dad0c0;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        .dashboard-container {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dashboard-container a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            text-align: center;
        }
        .logout-form {
            text-align: center;
        }
        .logout-form button {
            background-color: #FF4B4B;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="dashboard-container">
        <a href="{{ route('admin.plates') }}">Διαχείρηση Καταλόγου</a>
        <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
            @csrf
            <button type="submit">Αποσύνδεση</button>
        </form>
    </div>
</body>
</html>
