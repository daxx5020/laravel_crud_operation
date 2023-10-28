<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body class="bg-gray-300">

    <h1 class="text-3xl font-semibold text-center mt-8">Registration</h1>

    <form action="/register" method="post" class="mx-auto mt-8 w-1/3 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name:</label>
            <input type="text" name="firstname" placeholder="Enter your first name" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name:</label>
            <input type="text" name="lastname" placeholder="Enter your last name" class="w-full p-2 border rounded">
        </div>
        <div class="block text-center">
        <button type="submit" class="p-2 bg-blue-500 text-white rounded hover:bg-blue-700">Submit</button>
      </div>
    </form>

    <a href="/view" class="block text-center mt-4">
        <button type="button" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700 ">Data View</button>
    </a>
</body>
</html>

