<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullName</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @extends('layouts.app')
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        padding: 20px;
        font-size: 16px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
    }
    .header {
        background-color: #f2f2f2;
        padding: 20px;
        text-align: center;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .header h1 {
        font-size: 24px;
        color: #333;
    }
    .content {
        background-color: #e2dede;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .content p {
        margin-bottom: 15px;
        color: #333;
    }
    .content strong {
        color: #222;
        font-weight: bold;
    }
    .btn {
        background-color: #2563eb;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }
    .btn:hover {
        background-color: #1d4ed8;
    }
</style>
<body>
    <!-- <x-navigation /> -->
    <div class="container">
        <div class="header">
            <h1>Full Name and Student Information</h1>
        </div>
        <div class="content">
            <p><strong>Name:</strong> Gerald S. Montederamos</p>
            <p><strong>Student ID:</strong> 2310456-1</p>
            <p><strong>Section:</strong> BSIT-3A</p>
            <button onclick="location.href='{{ route('login') }}'" class="btn">
                Back
            </button>
        </div>
    </div>
</body>
</html>