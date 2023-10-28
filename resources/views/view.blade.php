<!DOCTYPE html>
<html>
<head>
  <title>Table Design</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 flex justify-center items-center h-screen">

  <table class="table-auto border border-collapse bg-white shadow-md rounded-lg">
    <thead>
      <tr>
        <th class="px-20 py-2">First Name</th>
        <th class="px-20 py-2">Last Name</th>
        <th class="px-20 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td class="px-40 py-2">{{$user->first_name}}</td>
        <td class="px-40 py-2">{{$user->last_name}}</td>
        <td class="px-40 py-2">
          <a href="/delete/{{$user->id}}">
            <button class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded-lg mr-2">Delete</button>
          </a>
          <a href="/update/{{$user->id}}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded-lg">Update</button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
