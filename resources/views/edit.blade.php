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

    <h1 class="text-3xl font-semibold text-center mt-8">Edit Data</h1>

    <form action="/update/{{$users->id}}" method="post" class="mx-auto mt-8 w-1/3 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name:</label>
            <input type="text" name="firstname" placeholder="Enter your first name" value="{{$users->first_name}}" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name:</label>
            <input type="text" name="lastname" placeholder="Enter your last name" value="{{$users->last_name}}" class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-700">Submit</button>
    </form>

</body>
</html>
